<?php

namespace MargaTampu\LaravelTeamsLogging;

use Monolog\Logger as MonologLogger;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\LogRecord;

class LoggerHandler extends AbstractProcessingHandler
{
    /** @var string */
    private $url;

    /** @var string */
    private $style;

    /** @var string */
    private $name;

    /**
     * @param $url
     * @param int $level
     * @param string $name
     * @param bool $bubble
     */
    public function __construct($url, $level = \Monolog\Level::Debug, $style = 'simple', $name = 'Default', $bubble = true)
    {
        parent::__construct($level, $bubble);

        $this->url   = $url;
        $this->style = $style;
        $this->name  = $name;
    }

    /**
     * @param LogRecord $record
     *
     * @return LoggerMessage
     */
    protected function getMessage(LogRecord $record)
    {
        if ($this->style == 'card') {
            $facts = [];

            // Date
            if (config('teams.show_date', true)) {
                $facts[] = [
                    'name' => 'Sent Date',
                    'value' => date(config('teams.date_format', 'D, M d Y H:i:s e')),
                ];
            }

            // Route
            if (config('teams.show_route', false) && request()) {
                $facts[] = [
                    'name'  => 'Route',
                    'value' => request()->getMethod() . ' : ' . request()->getPathInfo(),
                ];
            }

            // (Controller) Action
            if (config('teams.show_action', false) && request() && request()->route()) {
                $facts[] = [
                    'name'  => 'Action',
                    'value' => request()->route()->getActionName(),
                ];
            }

            // Included Context
            foreach ($record['context'] as $name => $value) {
                $facts[] = ['name' => $name, 'value' => $value];
            }

            return $this->useCardStyling($record['level_name'], $record['message'], $facts);
        }

        return $this->useSimpleStyling($record['level_name'], $record['message']);
    }

    /**
     * Styling message as simple message
     *
     * @param String $level
     * @param String $message
     * @param array  $facts
     */
    public function useCardStyling($level, $message, $facts)
    {
        $loggerColour = new LoggerColour($level);

        // LoggerMessage $data
        $loggerMessageData = [
            'summary'    => $level . ($this->name ? ': ' . $this->name : ''),
            'themeColor' => (string) $loggerColour,
            'sections'   => [],
        ];

        // LoggerMessage $data['sections']
        $section = [
            'activityTitle'    => config('teams.verbose_title', false)
                ? strtoupper($level) . ' : ' . $this->name . ' (' . config('app.url') . ')'
                : $this->name,
            'activitySubtitle' => $message,
            'facts'            => $facts,
            'markdown'         => true,
        ];

        if (config('teams.show_avatars', true)) {
            $section['activityImage'] = (string) new LoggerAvatar($level);
        }

        if (config('teams.show_type', true)) {
            $section['activitySubtitle'] = '<span style="color:#' . (string) $loggerColour . '">' . $message . '</span>';
        }

        $loggerMessageData['sections'][] = $section;

        $loggerMessage = new LoggerMessage($loggerMessageData);

        return $loggerMessage->jsonSerialize();
    }

    /**
     * Styling message as simple message
     *
     * @param String $level
     * @param String $message
     */
    public function useSimpleStyling($level, $message)
    {
        $loggerColour = new LoggerColour($level);

        return new LoggerMessage([
            'text'       => ($this->name ? $this->name . ' - ' : '') . '<span style="color:#' . (string) $loggerColour . '">' . $level . '</span>: ' . $message,
            'themeColor' => (string) $loggerColour,
        ]);
    }

    /**
     * @param LogRecord $record
     */
    protected function write(LogRecord $record): void
    {
        $json = json_encode($this->getMessage($record));

        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($json),
        ]);

        curl_exec($ch);
    }
}
