<?php


class router
{
    protected $routes=[];

    public function setRoutes(array $routes)
    {
        $this->routes=$routes;
    }

    public function direct($uri)
    {
        if(array_key_exists($uri, $this->routes)){
            list($class, $method) = explode ('@', $this->routes[$uri]);
            $controller = new $class();
            $controller->{$method}();
        }

            throw new Exception("Nu am gasit pagina");
    }
}