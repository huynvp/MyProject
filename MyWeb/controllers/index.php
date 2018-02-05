<?php
    class Index extends Controller
    {
        public function __construct() {
            parent::__construct();
            $this->view->title = "Trang chủ";
        }

        public function index() {
            $this->view->Render('index', 'index');
        }
    }
    