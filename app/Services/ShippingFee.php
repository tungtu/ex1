<?php


namespace App\Services;

use App\Models\Product;

class ShippingFee implements ShippingFeeInterface {
	public function calculateShippingFee( Product $product ) {
		return max( $product->calculateFeeByWeight(), $product->calculateFeeByDimension() );
	}

}
