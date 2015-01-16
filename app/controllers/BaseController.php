<?php


class BaseController implements Icontroller
{
	private $controller;
	public function __construct($c)
	{
		$this->controller = $c;
	}
	public function preDispatch()
	{
		
		$this->controller->preDispatch();
	}

	public function postDispatch()
	{
		
		$this->controller->postDispatch();
	}

	public function permission()
	{
		//$this->controller->preDispatch();
	}
}