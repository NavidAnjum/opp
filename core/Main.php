<?php


class Main
{


	public $pagename="index";
	private $_route;

	public function run()
	{
		$route = new Route();
		$controller = new Controller();
		$this->_route = $route->getSegment();
		
		$page = new $this->_route['controller']();
		$this->pagename = $this->_route['method'];
		$params = $this->_route['params'];

		//rendering page
		$controller->register($page,$this->pagename,$params);
		$controller->dispatch();

	}

}
?>