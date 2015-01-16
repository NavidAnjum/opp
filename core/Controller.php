<?php

//require 'core/interfaces/Icontroller.php';

class Controller implements Iroute{

	private $controller;
	private $method;
	private $args;

	public function register($controller,$method,$args)
	{
		$this->controller = $controller;
		$this->method     = $method;
		$this->args       = $args;
	}

	public function dispatch()
	{
		$base = new BaseController($this->controller);
		
		if(method_exists($this->controller, 'preDispatch'))
		{	
			$base->preDispatch();
		}
		
		if(method_exists($this->controller, $this->method))
		{
			//$this->controller->{$this->this->method}();	
			$params = array();
			if(!empty($this->args))
			{	foreach($this->args as $arg)
				{
					$params[] = $arg;
				}
			}
	
			call_user_func_array(array($this->controller,$this->method), $params);
		}
		else
		{
			echo "404";
		}

		if(method_exists($this->controller, 'postDispatch'))
			$base->postDispatch();
		
	}

	
	

}