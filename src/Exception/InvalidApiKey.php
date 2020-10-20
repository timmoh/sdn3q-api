<?php

namespace SDN3Q\Exception;

class InvalidApiKey extends \SDN3Q\Exception\ApiException
{
    protected $message = 'ApiKey is invalid';
}
