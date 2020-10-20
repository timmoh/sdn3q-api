<?php

namespace SDN3Q\Exception;

class ParameterRequired extends \SDN3Q\Exception\ApiException
{
    public function __construct($parameter = '', $code = 0, \Exception $previous = null)
    {
        $newMessage = 'Parameter ['.$parameter.'] is missing/cannot be empty';

        parent::__construct($newMessage, $code, $previous);
    }
}
