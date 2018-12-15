<?php
require_once realpath(__DIR__ . "/main.php");

$routerMaps = [
    ['GET', '/', 'CoreBundle\Factory\Pages\SignInFactory::index'],
    ['GET', '/sign-up', 'CoreBundle\Factory\Pages\SignUpFactory::index'],
    ['POST', '/api/sign-in', 'CoreBundle\Factory\Api\SignInFactory::signIn'],
    ['POST', '/api/sign-up', 'CoreBundle\Factory\Api\SignUpFactory::signUp'],
];


$router->addRoutes($routerMaps);
$router->match();