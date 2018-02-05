<?php
    class Course extends Controller {
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