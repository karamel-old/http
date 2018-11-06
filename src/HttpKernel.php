<?php

namespace Karamel\Http;
class HttpKernel
{
    protected static $instance;

    public static function getInstance()
    {
        if (self::$instance == null)
            self::$instance = new HttpKernel();
        return self::$instance;
    }

    protected $routeMiddlewares;
    protected $kernelClass;


    public function checkRouteMiddlewareExists($name)
    {
        return isset($this->routeMiddlewares[$name]);
    }

    public function getRouteMiddleware($name, $default = null)
    {
        return isset($this->routeMiddlewares[$name]) ? $this->routeMiddlewares[$name] : $default;
    }

    public function setKernelClass($class)
    {
        $this->kernelClass = $class;
    }

    public function getKernelClass()
    {
        return $this->kernelClass;
    }
}