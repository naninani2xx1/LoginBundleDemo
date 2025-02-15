<?php

namespace Nhc\LoginBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class NhcLoginExtension extends Extension
{

    /**
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../../config')
        );
        $loader->load('services.yaml');

        // $this->addAnnotatedClassesToCompile([
        //     // you can define the fully qualified class names...
        //     'Acme\\BlogBundle\\Controller\\AuthorController',
        //     // ... but glob patterns are also supported:
        //     'Acme\\BlogBundle\\Form\\**',

        //     // ...
        // ]);
    }
}
