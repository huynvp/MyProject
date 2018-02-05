<?php
    class Errors extends Controller
    {
        public function controller() {
            $this->view->Render('error', 'controller');
        }

        public function action() {
            $this->view->Render('error', 'action');
        }

        public function model() {
            $this->view->Render('error', 'model');
        }

        public function login() {
            $this->view->Render('error', 'login');
        }

        public function not_exist_user() {
            $this->view->Render('error', 'not_exist_user');
        }

        public function total() {
            $this->view->Render('error', 'total');
        }
    }
    