<?php

namespace MargaTampu\LaravelTeamsLogging;

class LoggerAvatar
{
    const EMERGENCY = 'eyes7/nose7/mouth7';
    const ALERT     = 'eyes7/nose7/mouth6';
    const CRITICAL  = 'eyes7/nose7/mouth5';
    const ERROR     = 'eyes7/nose7/mouth9';
    const WARNING   = 'eyes6/nose7/mouth10';
    const NOTICE    = 'eyes6/nose7/mouth3';
    const INFO      = 'eyes5/nose7/mouth1';
    const DEBUG     = 'eyes5/nose7/mouth1';

    /** @var string */
    private $url = 'https://api.adorable.io/avatars/face';

    /** @var string */
    private $cont;

    /** @var LoggerColour */
    private $loggerColour;

    /**
     * @param $cont
     */
    public function __construct($cont = 'DEBUG', LoggerColour $loggerColour)
    {
        $this->cont         = $cont;
        $this->loggerColour = $loggerColour;
    }

    /**
     * @return String
     */
    public function __toString()
    {
        return $this->url . '/' . constant('self::' . $this->cont) . '/' . (string) $this->loggerColour;
    }
}
