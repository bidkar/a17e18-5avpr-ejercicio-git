<?php
define('APP_DIR', __DIR__.'/');
define('APP_HOST', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/');
// APP_HOST = http://bibliotecav.dev/

define('APP_VIEWS', __DIR__ . '/src/views/');
define('APP_MODELS', __DIR__ . '/src/models/');
define('APP_CONTROLLERS', __DIR__ . '/src/controllers/');