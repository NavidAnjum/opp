<?php 

class Loader{
	

	private $_appPath;
	private $_configPath;
	private $_configs = array();

	public function __construct()
	{
		$this->_appPath = getcwd();
	}

	public function  loadClasses()
	{
		spl_autoload_register(function($class){
			include 'Classes/'.$class.'.php';
		});
	}	

	public function loadConfig()
	{
		
		
		$_configDir = $this->_appPath.DS.'config';
		
		if (is_dir($_configDir)) {

			$files = (scandir($_configDir));
			if(!empty($files))
			{
				foreach($files as $file)
				{
					if($file == "." || $file == "..")
					{	
						continue; 
					}
					$fileName = trim($_configDir.DS.$file);
					
					if(file_exists($fileName))
					{ 

						$config_elm = substr(basename($fileName), 0, -4);
						
						$this->configs[$config_elm] = include($_configDir.DS.$file);
						 
					}
				}
			}
		}
		
		
	}

	public function getConfig($config)
	{
		if(!empty($this->configs))
		{
			return $this->configs[$config];
		}
		else{
			$this->loadConfig();
			return $this->configs[$config];
		}
	}
}