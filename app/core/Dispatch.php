<?php

    namespace app\core;

    class Dispatch {

        protected $model_namespace = 'app/model/';
        protected $view_namespace = 'app/view/';

        public function view(String $view, String $title, Array $data = []):void
        {
            require_once $this->view_namespace.$view.'.php';
        }

        public function model(String $model):object
        {
            //set namespace
            $explode = explode('/', $this->model_namespace);
            $namespace = implode('\\', $explode);

            require_once $this->model_namespace.$model.'.php';

            $class = $namespace.$model;
            return new $class;
        }

    }