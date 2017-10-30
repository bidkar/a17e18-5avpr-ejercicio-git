<?php
namespace Src\Controllers;

class HomeController {
    function index() {
        require APP_VIEWS.'home.php';
    }
}