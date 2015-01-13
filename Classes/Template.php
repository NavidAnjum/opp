<?php


class Template{

	public function __construct()
	{

	}

	public function render($filename,$data,$true=false)
	{
		extract($data);
		if($true)
		{

			ob_start();
		 	include("Views/{$filename}.php");	
		 	return ob_get_clean();
		 	
		}else{

			include("Views/{$filename}.php");
		}
	}
}