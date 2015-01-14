<?php


class Main
{


	public $pagename="index";

	public function run()
	{
		
		$page = new Page();

		if(isset($_GET["P"]) && !empty($_GET["P"]))
		{
         	$this->pagename=$_GET["P"];
		}


		//rendering page
		
		if(method_exists($page, $this->pagename))
		{
			$page->{$this->pagename}();	

		}
		else
		{
			echo "404";
		}

	
	}

}
?>