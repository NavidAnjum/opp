<?php

class Page
{
	public function index()
	{
		echo "<h1>Here will be home page template of all page</h1>";
	}
	public function login()
	{
	require_once("Views/login.php");	
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