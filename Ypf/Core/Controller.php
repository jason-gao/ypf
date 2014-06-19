<?php

namespace Ypf\Core;

abstract class Controller
{
	public static $container;
		
	public function __construct()
	{
		self::$container = \Ypf\Ypf::getContainer();
	}
	
	protected function action($action, $args = array())
	{
		return \Ypf\Ypf::getInstance()->execute($action, $args);
	}
	
	public function __set($name, $value) {
		self::$container[$name] = $value;
	}

    public function __get($name)
    {
        return self::$container[$name];
    }
}
