<?php
declare(strict_types = 1);

namespace Opcache\Util;

class BytesToMegaBytes
{
    /**
     * @param int $bytes
     * @return float
     */
    public function convert(int $bytes): float
    {
        return (float)$bytes / 1024 / 1024;
    }
}
