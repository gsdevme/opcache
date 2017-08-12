<?php
declare(strict_types = 1);

namespace Opcache\Model;

class Status
{
    /**
     * @var bool
     */
    private $enabled;

    /**
     * @var bool
     */
    private $full;

    /**
     * @var MemoryUsage
     */
    private $memoryUsage;

    /**
     * @var Statistics
     */
    private $statistics;

    public function __construct(bool $enabled, bool $full, MemoryUsage $memoryUsage, Statistics $statistics)
    {
        $this->enabled = $enabled;
        $this->full = $full;
        $this->memoryUsage = $memoryUsage;
        $this->statistics = $statistics;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @return bool
     */
    public function isFull(): bool
    {
        return $this->full;
    }

    /**
     * @return MemoryUsage
     */
    public function getMemoryUsage(): MemoryUsage
    {
        return $this->memoryUsage;
    }

    /**
     * @return Statistics
     */
    public function getStatistics(): Statistics
    {
        return $this->statistics;
    }

}
