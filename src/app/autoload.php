<?php
return
    spl_autoload_register(function($classname)
	{
        // $classname = 'Src\Models\User';
        $path = strtolower($classname);
        // $path = 'src\models\user';
        $path = str_replace("\\","/",$path);
        // $path = 'src/models/user';
        $path = APP_DIR . $path . '.php';
        // $path = '/Applications/XAMPP/xamppfiles/htdocs/a17e18-5avpr-ejercicio-git/' . 'src/models/user' . '.php'
        // $path = '/Applications/XAMPP/xamppfiles/htdocs/a17e18-5avpr-ejercicio-git/src/models/user.php';

        if (is_readable($path)) {
            require_once $path;
        } else {
            return false;
        }
	});