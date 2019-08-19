<?php

namespace MargaTampu\LaravelTeamsLogging;

class LoggerAvatar
{
    const EMERGENCY = 'https://api.adorable.io/avatars/face/eyes7/nose7/mouth7/721C24';
    const ALERT     = 'https://api.adorable.io/avatars/face/eyes7/nose7/mouth6/721C24';
    const CRITICAL  = 'https://api.adorable.io/avatars/face/eyes7/nose7/mouth5/721C24';
    const ERROR     = 'https://api.adorable.io/avatars/face/eyes7/nose7/mouth9/721C24';
    const WARNING   = 'https://api.adorable.io/avatars/face/eyes6/nose7/mouth10/721C24';
    const NOTICE    = 'https://api.adorable.io/avatars/face/eyes6/nose7/mouth3/721C24';
    const INFO      = 'https://api.adorable.io/avatars/face/eyes5/nose7/mouth1/721C24';
    const DEBUG     = 'https://api.adorable.io/avatars/face/eyes5/nose7/mouth1/721C24';

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
