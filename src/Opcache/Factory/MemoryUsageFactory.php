<?php
declare(strict_types = 1);

namespace Opcache\Factory;

use Opcache\Model\MemoryUsage;

class MemoryUsageFactory
{
    public function createFromUsage(array $usage): MemoryUsage
    {
        return new MemoryUsage(
            $usage['used_memory'],
            $usage['free_memory'],
            $usage['wasted_memory'],
            $usage['current_wasted_percentage']
        );
    }
}
