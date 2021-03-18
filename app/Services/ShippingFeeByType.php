<?php


namespace App\Services;

use App\Models\Product;

class ShippingFeeByType implements ShippingFeeInterface {
	private $feeByProductType;

	public function calculateShippingFee( Product $product ) {
		return max( $product->calculateFeeByWeight(), $product->calculateFeeByDimension(), $this->feeByProductType );
	}
}
