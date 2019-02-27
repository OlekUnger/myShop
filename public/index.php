<?php
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new \myshop\App();
debug(\myshop\App::$app->getProperties());
