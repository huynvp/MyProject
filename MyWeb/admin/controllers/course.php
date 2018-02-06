<?php
    class Course extends Controller {
        function __construct() {
			parent::__construct();
			if(!isset($_SESSION['admin']))
				header('location:?controller=admin&action=login');
			$this->view->title = "Môn học";
		}
        
        function index() {
            $sql  = "SELECT course.*, tea.FULL_NAME, school_year.SEMESTER, school_year.START_YEAR, school_year.END_YEAR ";
            $sql .= "FROM course, teacher tea, school_year ";
            $sql .= "WHERE  course.TEACHER = tea.ID AND course.SCHOOL_YEAR = school_year.ID";
            
            $this->view->data = $this->db->GetList($sql);

            $this->view->Render('course', 'index');
        }

        function detail() {
            if(!isset($_GET['id'])) {
                $this->view->Render('error', 'id');
            } else {
                if(!is_numeric($_GET['id'])) {
                    $this->view->Render('error', 'id');
                } else {
                    if(isset($_POST['btn_columns'])) {
                        unset($_POST['btn_columns']);
                        $id = $_POST['id'];
                        unset($_POST['id']);
                        $col_json = json_encode($_POST);
                        $col_json = $this->db->RealEscapeString($col_json);
                        $this->db->Update('course', 'COLUMNS = \'' . $col_json . '\'', 'ID = ' . $id);
                    }

                    $this->view->course = $this->db->ShowOnceCourse($_GET['id']);
                    $this->view->Render('course', 'detail');
                }
            }
        }

        function report() {
            $this->view->Render('course', 'report', false);
        }
    }
    
?>