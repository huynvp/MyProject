<?php
    class User extends Controller
    {
        public function __construct() {
            parent::__construct();
            $this->view->title = "Trang người dùng";
        }

        public function login() {
            if(isset($_POST['btn'])) {
                $user = $_POST['user'];
                $user = $this->db->RealEscapeString($user);
                $pass = md5($_POST['pass']);

                $sql = "SELECT stu.*, lg.username FROM `login` lg, `student` stu WHERE lg.USERNAME = '".$user."' AND PASSWORD = '".$pass."' AND lg.WRONG_PASS <= 3 AND lg.ID = stu.ID_LOGIN";
                $result = $this->db->GetRow($sql);

                if($result) {
                    $_SESSION['user'] = $result;
                    header('location: ?controller=index&action=index');
                    $this->db->Update('Login', 'LAST_LOGIN = NOW(), WRONG_PASS = 0', 'ID = ' . $result['ID']);
                }
                else {
                    $this->db->Update('Login', 'WRONG_PASS = WRONG_PASS + 1', "USERNAME = '" . $user . "'");
                    $this->view->title = "Lỗi";
                    $this->view->Render('error', 'login');
                    $_SESSION['error']['user'] = $user;
                }
            } else {
                if(isset($_SESSION['user'])) header('location: ?controller=index&action=index');
                $this->view->title = "Đăng nhập";
                $this->view->Render('user', 'login');
            }
        }

        public function reset_pass() {
            $result = $this->db->INSERT('REQUEST_PASS', 'USER, DATE_REQUEST', "'" . $_SESSION['error']['user'] . "', NOW()");
            
            if($result)
                $this->view->Render('user', 'login');
            else $this->view->Render('error', 'not_exist_user');
        }

        public function logout() {
            unset($_SESSION['user']);
            header('location: ?controller=user&action=login');
        }
    }
    