<?php

    class IndexController extends BaseController {
        public function indexAction() {
            //$this->assets->addCss('css/home.css');
            $this->view->pick('home/index');
        }

        public function notFoundAction() {
            $this->view->pick('home/404');
        }
    }