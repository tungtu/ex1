<?php

namespace Tests;

use App\Models\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase{
	private $product;

	public function __construct(Product $product)
	{
		$this->product = $product;
	}

	public function testFeeByWeightIsEmpty(){
		$product = new Product(1,1,1,1,1);
		$this->assertEquals($product->feeByWeight);
	}
}