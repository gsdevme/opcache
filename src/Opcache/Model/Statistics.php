<?php
declare(strict_types = 1);

namespace Opcache\Model;

class Statistics
{
    /**
     * @var int
     */
    private $hits;

    /**
     * @var int
     */
    private $misses;

    /**
     * @var float
     */
    private $hitRate;

    public function __construct(int $hits, int $misses, float $hitRate)
    {
        $this->hits = $hits;
        $this->misses = $misses;
        $this->hitRate = $hitRate;
    }

    /**
     * @return int
     */
    public function getHits(): int
    {
        return $this->hits;
    }

    /**
     * @return int
     */
    public function getMisses(): int
    {
        return $this->misses;
    }

    /**
     * @return float
     */
    public function getHitRate(): float
    {
        return $this->hitRate;
    }
}
