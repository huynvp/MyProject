<?php 
	/**
	* 
	*/
	class Manage extends Controller
	{
		function __construct() {
			parent::__construct();
			if(!isset($_SESSION['admin']))
				header('location: ?controller=admin&action=login');
			else if($_SESSION['admin']['TYPE'] != 1)
				header('location: ?controller=index');
			$this->view->title = "Quản lý";
		}

		function index() {
			$this->view->Render('manage', 'index');
		}

		function reset_pass() {
			$this->view->Render('manage', 'reset_pass');
		}
	}
?>