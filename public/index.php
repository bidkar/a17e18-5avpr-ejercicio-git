<?php
require_once '../config.inc.php';
require_once '../src/app/autoload.php';
use Src\Models\User;

echo 'APP_DIR = ' . APP_DIR . '<br>';
echo '__DIR__ = ' . __DIR__;
// src/models/user.php

$a = new User();