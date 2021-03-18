<?php

namespace App\Models;

use App\Services\ShippingFeeInterface;

class Product {
	private $amz_price;
	private $weight;
	private $width;
	private $height;
	private $depth;

	public function __construct($amz_price, $weight, $width, $height, $depth) {
		$this->amz_price = $amz_price;
		$this->weight    = $weight;
		$this->width     = $width;
		$this->height    = $height;
		$this->depth     = $depth;
	}

	public function calculateFeeByWeight(){
		global $CONFIG_APP;
		return $this->weight * (int)$CONFIG_APP[WEIGHT_COEFFICIENT];
	}

	public function calculateFeeByDimension(){
		global $CONFIG_APP;
		return $this->width * $this->height * $this->depth * (int)$CONFIG_APP[WEIGHT_COEFFICIENT];
	}

	public function calculatePrice(ShippingFeeInterface $ShippingFee){
		return $this->amz_price + $ShippingFee->calculateShippingFee($this);
	}
}
