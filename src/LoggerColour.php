<?php

namespace MargaTampu\LaravelTeamsLogging;

class LoggerColour
{
    const EMERGENCY = '721C24';
    const ALERT     = 'AF2432';
    const CRITICAL  = 'FF0000';
    const ERROR     = 'FF8000';
    const WARNING   = 'FFEEBA';
    const NOTICE    = 'B8DAFF';
    const INFO      = 'BEE5EB';
    const DEBUG     = 'C3E6CB';

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
        return config('teams.colours.' . strtolower($this->const), constant('self::' . $this->const));
    }
}
