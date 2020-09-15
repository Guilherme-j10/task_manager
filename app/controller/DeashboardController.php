<?php

    namespace app\controller;
    use app\core\Dispatch;
    
    class DeashboardController extends Dispatch{

        public function home(Array $req, Array $res){
            $this->view('DeashboardHome', 'Home');
        }

    }