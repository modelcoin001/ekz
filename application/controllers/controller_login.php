<?php

class Controller_Login extends Controller
{
	
	function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
	}

	function action_index()
	{

		if(isset($_POST['login']) && isset($_POST['password']))
		{
			$login = $_POST['login'];
			$password =$_POST['password'];
			$pass = md5($_POST['password']);

			$user = $this->model->get_userdata($login);

			if($login==$user["name"] && $pass==$user["pass"])
			{
				$data["login_status"] = "access_granted";
				
				session_start(); echo $_SESSION['admin'];
				$_SESSION['admin'] = $user["role"];
				header('Location:/admin/');
			}
			else
			{
				$data["login_status"] = "access_denied";
			}
		}
		else
		{
			$data["login_status"] = "";
		}
		
		$this->view->generate('login_view.php', 'template_view.php', $data);
	}
	
}
