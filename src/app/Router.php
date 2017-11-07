<?php
namespace Src\App;
use Src\Controllers;

class Router {

    public static function get($url) {
        if ($url == '/') {
            return static::callController('home');
        } else {
            $a = preg_split('/[\/]/', $url);
            switch (count($a)) {
                case 1:
                    return static::callController($a[0]);
                    break;
                case 2:
                    return static::callController($a[0], $a[1]);
                    break;
                case 3:
                    return static::callController($a[0], $a[1], $a[2]);
                    break;
            }
        }
    }

    private static function callController($controller, $action = null, $param = null) {
        $controller = 'Src\\Controllers\\' . ucwords($controller) . 'Controller';
        if (is_null($action)) {
            $action = 'index';
        }
        if (is_callable([$controller, $action])) {
            return call_user_func([$controller, $action], $param);
        } else {
            return call_user_func('Src\\Controllers\\ErrorController::notFound', $param);
        }
    }
}