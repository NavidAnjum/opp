<?php


class Template{

	private $_templateConfig;
	private $_current_template;


	public function __construct($template='generic')
	{
		global $loader;
		$this->_templateConfig = $loader->getConfig('template');
		
		$this->_current_template = $template;
	}

	public function render($filename,$data,$true=false)
	{
		extract($data);

		if($true)
		{

			ob_start();
		 	include($this->getViewPath()."/{$filename}.php");	
		 	return ob_get_clean();
		 	
		}else{

			include($this->getViewPath()."/{$filename}.php");
		}
	}

	public function getViewPath()
	{
		return $this->_templateConfig['view_path'];
	}

	public function getTemplatePath()
	{
		return $this->_templateConfig['template_path'];
	}

	public function setTemplate($template)
	{
		$this->_current_template = $template;
	}
}
?>