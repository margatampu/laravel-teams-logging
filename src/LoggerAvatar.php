<?php

namespace Edsonjorgef1\LaravelTeamsLogging;

class LoggerAvatar
{
    const EMERGENCY = 'https://adorable-avatars.broken.services/face/eyes7/nose7/mouth7/721C24';
    const ALERT     = 'https://adorable-avatars.broken.services/face/eyes7/nose7/mouth6/AF2432';
    const CRITICAL  = 'https://adorable-avatars.broken.services/face/eyes7/nose7/mouth5/FF0000';
    const ERROR     = 'https://adorable-avatars.broken.services/face/eyes7/nose7/mouth9/FF8000';
    const WARNING   = 'https://adorable-avatars.broken.services/face/eyes6/nose7/mouth10/FFEEBA';
    const NOTICE    = 'https://adorable-avatars.broken.services/face/eyes6/nose7/mouth3/B8DAFF';
    const INFO      = 'https://adorable-avatars.broken.services/face/eyes5/nose7/mouth1/BEE5EB';
    const DEBUG     = 'https://adorable-avatars.broken.services/face/eyes5/nose7/mouth1/C3E6CB';

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
