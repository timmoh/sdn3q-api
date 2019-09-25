<?php

namespace SDN3Q\Transformer;

use MintWare\DMM\TransformerInterface;

class FloatTransformer implements TransformerInterface {

	public static function transform($data) {
		return (float)$data;
	}

	public static function reverseTransform($data) {
		return (float)$data;
	}
	
}
