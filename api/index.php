<?php

define("WWW_ROOT",dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR);

require_once WWW_ROOT. "dao" .DIRECTORY_SEPARATOR. 'TweetDAO.php';
require_once WWW_ROOT. "dao" .DIRECTORY_SEPARATOR. 'ImageDAO.php';
require_once WWW_ROOT. "api" .DIRECTORY_SEPARATOR. 'Slim'. DIRECTORY_SEPARATOR .'Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

require_once WWW_ROOT. "api" .DIRECTORY_SEPARATOR. 'tweets.php';
require_once WWW_ROOT. "api" .DIRECTORY_SEPARATOR. 'images.php';

$app->run();

