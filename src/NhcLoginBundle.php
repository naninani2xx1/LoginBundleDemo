<?php
namespace Nhc\LoginBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NhcLoginBundle extends Bundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }
}