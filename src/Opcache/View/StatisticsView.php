<?php
declare(strict_types = 1);

namespace Opcache\View;

use Opcache\Model\Status;
use Opcache\Util\BytesToMegaBytes;

class StatisticsView implements StatisticsViewInterface
{
    /**
     * @var Status
     */
    private $status;

    /**
     * @var BytesToMegaBytes
     */
    private $converter;

    public function __construct(Status $status)
    {
        $this->status = $status;
        $this->converter = new BytesToMegaBytes();
    }

    public function getHits(): string
    {
        return number_format($this->status->getStatistics()->getHits());
    }

    public function getMisses(): string
    {
        return number_format($this->status->getStatistics()->getMisses());
    }

    public function getHitRate(): string
    {
        return number_format($this->status->getStatistics()->getHitRate(), 2);
    }

    public function getFree(): string
    {
        return number_format($this->converter->convert($this->status->getMemoryUsage()->getFree()), 1);
    }

    public function getUsed(): string
    {
        return number_format($this->converter->convert($this->status->getMemoryUsage()->getUsed()), 1);
    }
}
