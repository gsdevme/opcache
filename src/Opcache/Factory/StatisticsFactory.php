<?php
declare(strict_types = 1);

namespace Opcache\Factory;

use Opcache\Model\Statistics;

class StatisticsFactory
{
    public function createFromStatistics(array $statistics): Statistics
    {
        return new Statistics($statistics['hits'], $statistics['misses'], $statistics['opcache_hit_rate']);
    }
}
