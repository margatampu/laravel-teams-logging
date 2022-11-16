<?php

namespace Edsonjorgef1\LaravelTeamsLogging;

class LoggerAvatar
{
    const EMERGENCY = 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/721C24.png';
    const ALERT     = 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/AF2432.png';
    const CRITICAL  = 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/FF0000.png';
    const ERROR     = 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/FF8000.png';
    const WARNING   = 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/FFEEBA.png';
    const NOTICE    = 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/B8DAFF.png';
    const INFO      = 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/BEE5EB.png';
    const DEBUG     = 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/C3E6CB.png';

    /** @var string */
    private $const;

    /**
     * @param $const
     */
    public function __construct($const = 'DEBUG')
    {
        $this->const = $const;
    }

    /**
     * @return String
     */
    public function __toString()
    {
        return config('teams.avatars.' . strtolower($this->const), constant('self::' . $this->const));
    }
}
