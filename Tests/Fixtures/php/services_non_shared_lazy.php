<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class ProjectServiceContainer extends Container
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'bar' => 'getBarService',
        ];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'foo' => true,
        ];
    }

    protected function createProxy($class, \Closure $factory)
    {
        return $factory();
    }

    /**
     * Gets the public 'bar' shared service.
     *
     * @return \stdClass
     */
    protected function getBarService()
    {
        return $this->services['bar'] = new \stdClass($this->getFooService());
    }

    /**
     * Gets the private 'foo' service.
     *
     * @return \stdClass
     */
    protected function getFooService($lazyLoad = true)
    {
        // lazy factory for stdClass

        return new \stdClass();
    }
}

// proxy code for stdClass
