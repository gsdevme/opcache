<?php
declare(strict_types = 1);

namespace Opcache\Exception;

class OpcacheIsNotInstalledException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('Opache is not installed or enabled');
    }
}
