<?php
    class Index extends Controller
    {
        public function __construct() {
            parent::__construct();
            $this->view->title = "Trang chủ";
        }

        public function index() {
            if(!isset($_SESSION['admin']))
                header('location:?controller=admin&action=login');
            $this->view->Render('index', 'index');
        }
    }
    