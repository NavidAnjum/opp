<?php

class Route{

	private $_routeConfig;
	
	public function __construct()
	{
		global $loader;
		$this->_routeConfig = $loader->getConfig('routes');
	}

	function getSegment()
	{
		$route = array();

		if($this->_routeConfig['seo_friendly']){

			// here will be set route if url is seo friendly
		}
		else
		{
			// query stirng based route
			
			$queryString = $_SERVER['QUERY_STRING'];
			$str = explode("&",$queryString);
			
			
			foreach($str as $key=>$value)
			{
				$keyValue = explode("=",$value);
				if($key === 0)
				{
					// search controllers
					$route['controller'] = (!empty($keyValue[1]))? trim($keyValue[1]) : '';
				}
				if($key === 1)
				{
					// search methods in controller
					$route['method'] = (!empty($keyValue[1]))? trim($keyValue[1]) : '';
				}
				if($key > 1)
				{
					$route['params'][$keyValue[0]] = (!empty($keyValue[1]))? trim($keyValue[1]) : '';
				}
			}

			if(empty($route['controller']))
				$route['controller'] = $this->_routeConfig['default_controller'];

			if(empty($route['method']))
				$route['method']     = $this->_routeConfig['default_action'];

			if(empty($route['params']))
				$route['params']     = array();

		}
		return $route;
	}	
}
