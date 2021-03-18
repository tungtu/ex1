<?php

namespace App\Models;

use App\Services\ShippingFee;

class Order {
	private $products;

	public function setItem( Product $product ) {
		$this->products[] = $product;
	}

	public function calculateGrossPrice() {
		$total = 0;
		$shippingFee = new ShippingFee();
		foreach ( $this->products as $product ) {
			$total       += ( $product->calculatePrice($shippingFee));
		}

		return $total;
	}

}
