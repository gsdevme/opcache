<?php
declare(strict_types = 1);

namespace Opcache\Factory;

use Opcache\Exception\OpcacheIsNotInstalledException;
use Opcache\Model\Status;

class StatusFactory
{
    public function create(): Status
    {
        $status = opcache_get_status(false);

        dump($status);

        if ($status === false) {
            throw new OpcacheIsNotInstalledException();
        }

        return new Status(
            $status['opcache_enabled'],
            $status['cache_full'],
            (new MemoryUsageFactory())->createFromUsage($status['memory_usage']),
            (new StatisticsFactory())->createFromStatistics($status['opcache_statistics'])
        );
    }
}
