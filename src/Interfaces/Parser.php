<?php

namespace CoreBundle\Interfaces;


use Symfony\Component\HttpFoundation\ParameterBag;

interface Parser
{
    public function parse(ParameterBag $parameterBag);
}