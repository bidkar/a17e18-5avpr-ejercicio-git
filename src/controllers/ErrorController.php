<?php
namespace Src\Controllers;

class ErrorController {
    static function notFound($param) {
        header("HTTP/1.0 404 Not Found");
        require APP_VIEWS.'error/404.php';
    }
}