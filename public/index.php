<?php
require_once '../config.inc.php';
require_once '../src/app/helpers.php';
require_once '../src/app/autoload.php';
use Src\App\Router;

// http://biblioteca.dev/Controller/Action/Params
// http://biblioteca.dev/login
// http://biblioteca.dev/home
// http://biblioteca.dev/user
// http://biblioteca.dev/user/all
// http://biblioteca.dev/user/edit/1

if (isset($_GET['url'])) {
    Router::get($_GET['url']);
} else {
    Router::get('/');
}