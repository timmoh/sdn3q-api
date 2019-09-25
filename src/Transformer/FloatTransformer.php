<?php

namespace SDN3Q\Transformer;

class FloatTransformer implements MintWare\DMM\TransformerInterface {

	public static function transform($data) {
		return (float)$data;
	}

	public static function reverseTransform($data) {
		return (float)$data;
	}
	
}
