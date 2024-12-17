<?php

const DS = DIRECTORY_SEPARATOR;
const WEB_DS = '/';
define('ROOT', getcwd() . DS); // echo ROOT . '<br/>';
define("PARENT_ROOT", dirname(ROOT) . DS); // echo PARENT_ROOT . '<br/>';
define('URL', $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . "/"); // echo URL . '<br/>';

const DEV = PARENT_ROOT . 'dev' . DS;
const CONTROLLERS = DEV . 'controllers' . DS;
const INCLUDES = DEV . 'includes' . DS;

const CSS = URL . 'css' . DS;
const JS = URL . 'js' . DS;
const IMG = URL . 'images' . DS;
const IMG_NAV = IMG . 'nav' . DS;

spl_autoload_register(function ($class) {
    if(file_exists(CONTROLLERS . $class . '.php')) {
        require_once CONTROLLERS . $class . '.php';
    }
});