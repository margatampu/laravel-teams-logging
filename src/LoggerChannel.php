<?php

namespace MargaTampu\LaravelTeamsLogging;

use Monolog\Logger as MonologLogger;

class LoggerChannel
{
    /**
     * @param array $config
     *
     * @return TeamsLogger
     */
    public function __invoke(array $config)
    {
        return new Logger($config['url'], $config['level'] ?? MonologLogger::DEBUG, $config['style'] ?? 'simple', $config['name'] ?? null);
    }
}
