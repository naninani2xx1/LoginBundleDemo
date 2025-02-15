<?php
namespace Nhc\LoginBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class NhcLoginBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }


    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../config/services.yaml');

        $builder->setParameter('nhc.login.enabled', 'xinchao');

        $container->parameters()->set('nhc.login.username', 'xinchao asd');
    }
}