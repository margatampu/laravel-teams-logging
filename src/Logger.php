<?php

namespace MargaTampu\LaravelTeamsLogging;

use Monolog\Logger as MonologLogger;

class Logger extends MonologLogger
{
    /**
     * @param $url
     * @param int $level
     * @param bool $bubble
     */
    public function __construct($url, $level = MonologLogger::DEBUG, $style = 'simple', $name = 'Default', $bubble = true)
    {
        parent::__construct('teams-logger');

        $this->pushHandler(new LoggerHandler($url, $level, $style, $name));
    }
}
