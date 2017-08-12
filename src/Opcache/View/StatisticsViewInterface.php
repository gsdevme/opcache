<?php
declare(strict_types = 1);

namespace Opcache\View;

interface StatisticsViewInterface
{
    public function getFree(): string;

    public function getUsed(): string;

    public function getHitRate(): string;
}
