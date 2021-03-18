<?php

define( 'ROOT_PATH', str_replace( '/public', '/', __DIR__ ) );

require ROOT_PATH . 'vendor/autoload.php';

require_once( ROOT_PATH . "configs/app.php" );

use App\Models\Order;
use App\Models\Product;
use App\Services\ShippingFee;

$order = new Order();
$product = new Product( 1000, 1, 2, 3, 4);
$order->setItem($product);

echo "Price: " . $order->calculateGrossPrice() . "\n";