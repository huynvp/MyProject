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

        public function total() {
            $this->view->Render('error', 'total');
        }

        public function id() {
            $this->view->Render('error', 'id');
        }
    }
    