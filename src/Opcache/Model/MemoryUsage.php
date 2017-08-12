<?php
declare(strict_types = 1);

namespace Opcache\Model;

class MemoryUsage
{
    /**
     * @var int
     */
    private $used;

    /**
     * @var int
     */
    private $free;

    /**
     * @var int
     */
    private $wasted;

    /**
     * @var float
     */
    private $wastedPercentage;

    public function __construct(int $used, int $free, int $wasted, float $wastedPercentage)
    {
        $this->used = $used;
        $this->free = $free;
        $this->wasted = $wasted;
        $this->wastedPercentage = $wastedPercentage;
    }

    /**
     * @return int
     */
    public function getUsed(): int
    {
        return $this->used;
    }

    /**
     * @return int
     */
    public function getFree(): int
    {
        return $this->free;
    }

    /**
     * @return int
     */
    public function getWasted(): int
    {
        return $this->wasted;
    }

    /**
     * @return float
     */
    public function getWastedPercentage(): float
    {
        return $this->wastedPercentage;
    }
}
