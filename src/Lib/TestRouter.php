<?php

namespace CoreBundle\Lib;

use Symfony\Component\HttpFoundation\Request;

class TestRouter extends \AltoRouter
{
    public function match($requestUrl = null, $requestMethod = null)
    {
        $requestMethod = $this->getRequestMethod($requestMethod);

        $match = parent::match();
        if (is_array($match)) {
            list( $factory, $method ) = $this->getMethod($match['target']);

            if ( is_callable(array($factory::getInstance(), $method)) ) {
                call_user_func_array(array($factory::getInstance(),$method), array($this->setRequest($requestMethod, $match['params'])));

                return true;
            }
        }

        return false;
    }

    private function getMethod($target)
    {
        $splitted = explode('::', $target);
        $factory = $splitted[0];
        $method = $splitted[1];

        return [$factory, $method];
    }

    private function getRequestMethod($requestMethod)
    {
        if($requestMethod === null) {
            $requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
        }

        return $requestMethod;
    }

    private function setRequest($method, $params)
    {
        switch ($method) {
            case 'GET':
                $_GET = $params;
                break;
        }

        return Request::createFromGlobals();
    }
}