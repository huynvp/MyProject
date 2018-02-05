<?php
    class Admin extends Controller
    {
        public function __construct() {
            parent::__construct();
            $this->view->title = "Trang quản trị";
        }

        function login() {
            $this->view->title = "Trang quản trị";
            if(isset($_POST['btn'])) {
                $admin = $_POST['admin'];
                $admin = $this->db->RealEscapeString($admin);
                $pass = md5($_POST['pass']);

                $sql = "SELECT tea.*, lg.USERNAME, note.NAME FROM `login` lg, `teacher` tea, `note` note WHERE lg.USERNAME = '".$admin."' AND PASSWORD = '".$pass."' AND lg.WRONG_PASS <= 3 AND lg.ID = tea.ID_LOGIN AND note.ID = tea.TYPE AND tea.STATUS = 1";
                $result = $this->db->GetRow($sql);

                if($result) {
                    $_SESSION['admin'] = $result;
                    header('location: ?controller=index&action=index');
                    $this->db->Update('Login', 'LAST_LOGIN = NOW(), WRONG_PASS = 0', 'ID = ' . $result['ID']);
                }
                else {
                    $this->db->Update('Login', 'WRONG_PASS = WRONG_PASS + 1', "USERNAME = '" . $admin . "'");
                    $this->view->title = "Lỗi";
                    $this->view->Render('error', 'login');
                    $_SESSION['error']['admin'] = $admin;
                }
            } else {
                if(isset($_SESSION['admin'])) header('location: ?controller=index&action=index');
                $this->view->title = "Đăng nhập";
                $this->view->Render('admin', 'login');
            }
        }

        public function logout() {
            unset($_SESSION['admin']);
            header('location: ?controller=admin&action=login');
        }
    }
    