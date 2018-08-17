<?php

namespace SDN3Q\Exception;

class InvalidReturnCode extends \SDN3Q\Exception\ApiException {

	protected $message = 'Return Code from API is invalid';
}