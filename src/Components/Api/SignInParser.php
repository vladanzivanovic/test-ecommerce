<?php

namespace CoreBundle\Components\Api;


use CoreBundle\Interfaces\Parser;
use Symfony\Component\HttpFoundation\ParameterBag;

class SignInParser implements Parser
{
    public function parse(ParameterBag $parameterBag)
    {
        return [
            'email' => $parameterBag->get('email'),
            'password' => $parameterBag->get('password'),
        ];
    }
}