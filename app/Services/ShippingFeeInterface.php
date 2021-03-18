<?php


namespace App\Services;


use App\Models\Product;

interface ShippingFeeInterface {
	public function calculateShippingFee(Product $product);
}