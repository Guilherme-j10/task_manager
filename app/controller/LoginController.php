<?php

    namespace app\controller;
    use app\core\Dispatch;

    class LoginController extends Dispatch
    {

        public function validade(Array $req, Array $res):void
        {
            $this->view('LoginScreen', 'Login - credentials');
        }

    }