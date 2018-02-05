<?php 
	/**
	* 
	*/
	class Teacher extends Controller {
		function __construct() {
			parent::__construct();
			if(!isset($_SESSION['admin']))
				header('location:?controller=admin&action=login');
			elseif($_SESSION['admin']['TYPE'] != 1) 
				header('location:?controller=index');
			$this->view->title = "Quản lí giáo viên";
		}

		function index() {
			$this->view->list = $this->db->GetList("SELECT * FROM Teacher");
			$this->view->Render('teacher', 'index');
		}

		function add() {
			if(isset($_POST['btn'])) {
				unset($_POST['btn']);
				$data = $_POST;

				$value1 = "'" . $data['user'] . "', '". md5('123456') ."', 0, NOW()";
				$value2 = "(SELECT ID FROM login WHERE USERNAME = '" . $data['user'] . "'), ";
				$value2.= "'" . $data['full_name'] . "', ";
				$value2.= "'" . $data['birthday'] . "', ";
				$value2.= "'" . $data['address'] . "', ";
				$value2.= "'" . $data['mail'] . "', " . $data['type'] . ", 1";

				if($this->db->Insert('login', 'USERNAME, PASSWORD, WRONG_PASS, LAST_LOGIN', $value1)) {
					if($this->db->Insert('teacher', 'ID_LOGIN, FULL_NAME, BIRTHDAY, ADDRESS, MAIL, TYPE, STATUS', $value2)) {
						header('location:?controller=teacher');
					}
					//else header('location:?controller=error');
				}
			}
			$this->view->GetType = $this->db->showTypeTeacher();
			$this->view->Render('teacher', 'add');
		}

		function edit() {
			if(isset($_POST['btn'])) {
				$value  = "FULL_NAME = '"	.$_POST['full_name']."', ";
				$value .= "BIRTHDAY = '"	.$_POST['birthday']."', ";
				$value .= "ADDRESS = '"		.$_POST['address']."', ";
				$value .= "MAIL = '"		.$_POST['mail']."', ";
				$value .= "TYPE = "			.$_POST['type'].", ";
				$value .= "STATUS = "		.$_POST['status'];

				if($this->db->Update('teacher', $value, "ID = " . $_POST['id'])) {
					header('location: ?controller=teacher&action=index');
				}
					
			}
			if(isset($_GET['id'])) {
				if(is_numeric($_GET['id'])) {
					$this->view->data = $this->db->ShowOneTeacher($_GET['id']);
					$this->view->GetType = $this->db->showTypeTeacher();
					$this->view->Render('teacher', 'edit');
				}
			}
		}

		function remove() {
			if(isset($_GET['id'])) {
				if(is_numeric($_GET['id'])) {
					if($this->db->Update('teacher', "STATUS = 0", "ID = " . $_GET['id'])) {
						header('location: ?controller=teacher&action=index');
				}
				}
			}
		}


	}
?>