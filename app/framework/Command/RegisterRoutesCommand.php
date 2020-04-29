<?php


namespace Framework\Command;

use Kernel;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\DependencyInjection\ContainerBuilder;


class RegisterRoutesCommand
{
    /**
     * @var RouteCollection
     */
    private $routeCollection;

    /**
     * @var ContainerBuilder
     */
    private $containerBuilder;

    /**
     * RegisterRoutesCommand constructor.
     * @param RouteCollection $routeCollection
     */
    public function __construct(RouteCollection $routeCollection)
    {
        $this->routeCollection = $routeCollection;
    }

    /**
     * @return RouteCollection
     */
    public function getRouteCollection(): RouteCollection
    {
        return $this->routeCollection;
    }

    /**
     * @return ContainerBuilder
     */
    public function getContainerBuilder(): ContainerBuilder
    {
        return $this->containerBuilder;
    }

}