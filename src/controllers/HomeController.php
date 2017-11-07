<?php
namespace Src\Controllers;

class HomeController {
    static function index($param) {
        require APP_VIEWS.'home/index.php';
    }

    static function acerca($param) {
        require APP_VIEWS.'home/acerca.php';
    }

    static function login($param) {
        require APP_VIEWS.'home/login.php';
    }
}