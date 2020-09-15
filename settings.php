<?php

    $production_mode = false;
    $https = false;

    if($production_mode){
        if($https){
            define('SITE_NAME', 'https://'.$_SERVER['HTTP_HOST'].'/');
        }else{
            define('SITE_NAME', 'http://'.$_SERVER['HTTP_HOST'].'/');
        }
    }else{
        define('SITE_NAME', 'http://'.$_SERVER['HTTP_HOST'].'/task/');
    }

    define('DIR_STYLE_NAME', SITE_NAME.'public/style/');
    define('DIR_JS_NAME', SITE_NAME.'public/js/');
    define('IMAGES', SITE_NAME.'public/assets/');