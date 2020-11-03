<?php


namespace Sonar200\Router;


/**
 * Class ModuleRouteMiddleWare
 *
 * @package Route
 */
class ModuleRouteMiddleWare extends ModuleRouter{
    /**
     * @var
     */
    private $pattern;

    /**
     * @param string $pattern
     */
    public function __construct(string $pattern = '') {
        parent::__construct();
        $this->pattern = $pattern;
    }

    /**
     * @param string $class
     * @param string $method
     * @param bool   $return
     *
     * @return void
     */
    public function middleWare(string $class, string $method, bool $return = false)
    {
        if(!empty($this->pattern) && !empty($class) && !empty($method)){
            parent::$middleWare[$this->pattern] = ['class' => $class, 'method' => $method, 'return' => $return];
        }
    }
}