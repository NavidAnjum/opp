<?php

class Page
{
	private $template;
	public function __construct()
	{
		$this->template = new Template();
	}

	public function index()
	{
		echo "<h1 style='color:red';>Here will be home page template of all page</h1>";
	}
	public function login()
	{
		
		$data['content'] = $this->template->render('test',array('hello'=>'hello world'),true);
		$this->template->render('Templates/template',$data);
	}
	public function home()
	{
		require_once("Views/home.php");
	}

	public function register()
	{
		$data['content'] = '';
		$this->template->render('Templates/register',$data);
		//require_once("Views/register.php");
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