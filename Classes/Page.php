<?php

class Page
{
	public function index()
	{
		echo "<h1 style='color:red';>Here will be home page template of all page</h1>";
	}
	public function login()
	{
		$template = new Template;
		$data['content'] = $template->render('test',array('hello'=>'hello world'),true);
		$template->render('Templates/template',$data);
	}
	public function home()
	{
		require_once("Views/home.php");
	}

	public function register()
	{
		require_once("Views/register.php");
	}

	public function users()
	{

	}
	
	public function profile()
	{
	require_once("Views/profile.php");
	}
	
	public function adduser()
	{

	}
}
?>