<?php

require_once realpath(__DIR__."/vendor/autoload.php");

$httpProtocol = (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') ? 'http' : 'https';
define("BASE_URL", $httpProtocol."://{$_SERVER['HTTP_HOST']}");

//use \CoreBundle\Factory\PageFactory;
//use \CoreBundle\Extensions\ParameterExtension;
use \CoreBundle\Lib\TestRouter;

//$factory = new PageFactory();
//$parameters = new ParameterExtension();
$detect = new Mobile_Detect();

$router = new TestRouter();

$displayErrors = 1;

//$version = $parameters->getParameter('asset', 'version');

//if($parameters->getParameter('environment') === 'dev') {
//    $displayErrors = 1;
//}

error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', $displayErrors);
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");

