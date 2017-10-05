<?php
require_once '../config.inc.php';
require_once '../src/app/autoload.php';


if (isset($_GET['url'])) {
    switch ($_GET['url']) {
        case 'home':
            include '../src/views/home.php';
            break;
        case 'login':
            include '../src/views/login.php';
            break;
        default :
            echo '404';
            break;
    }
} else {
    include '../src/views/home.php';
}