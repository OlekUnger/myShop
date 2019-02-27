<?php
define("DEBUG", 1); //1-режим разработки, 0-продакшн
define("ROOT", dirname(__DIR__)); //корневой путь
define("WWW", ROOT . '/public');
define("CORE", ROOT . '/vendor/myshop/core');
define("LIBS", ROOT . '/vendor/myshop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'default'); //шаблон сайта

// http://myshop.loc/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

// http://myshop.loc/
$app_path = preg_replace("#/public/[^/]+$#", "", $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php'; // автозагрузчик композера

