<?php

namespace CoreBundle\Components\Api;


use CoreBundle\Interfaces\Parser;
use Symfony\Component\HttpFoundation\ParameterBag;

class SignUpParser implements Parser
{
    public function parse(ParameterBag $parameterBag)
    {
        return [
            'firstname' => $parameterBag->get('firstname'),
            'lastname' => $parameterBag->get('lastname'),
            'email' => $parameterBag->get('email'),
            'password' => $parameterBag->get('password'),
            'repeatpassword' => $parameterBag->get('repeatpassword'),
        ];
    }
}