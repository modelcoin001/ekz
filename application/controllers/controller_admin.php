<?php

class Controller_Admin extends Controller
{

	function __construct()
	{
		$this->model = new Model_Admin();
		$this->view = new View();
	}
	
	function action_index()
	{
		session_start();
		

		if ( $_SESSION['admin'] == "admin" )
		{
			$this->view->generate('admin_view.php', 'template_view.php');
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

	}
	
	// Действие для разлогинивания администратора
	function action_logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}

	function action_add()
	{
		session_start();
		if ( $_SESSION['admin'] == "admin" ){
			$date = time();
			$title = $_POST["title"];
			$content = $_POST["content"];
			if( $this->model->save_post($date, $title, $content)){
				echo "Пост успешно добавлен!";
			}
		}
		else
		{
			echo false;
		}
	}

}
