<?php

    use elevenstack\expressphp\Express as app;

    $app = new app();

    $app->type_aplication('web');

    $app->namespace('app/controller/');

    $app->get('/', function($req, $res){
        $res['redirect']('Login');
    });

    //ROTA DE LOGIN
    $app->get('/Login', 'LoginController:validade');

    //ROTA DA DEASHBOARD DA HOME
    $app->get('/deashboard', 'DeashboardController:home');

    $app->error($app->getRoute_request(), function($res){
        $res['send']('pagina não encontrada');
    });