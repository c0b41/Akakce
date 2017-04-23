<?php 

namespace SM\Akakce;

use SM\Akakce\AkakceProduct\Product;
use SM\Akakce\AkakceException;
use Philo\Blade\Blade;


class Akakce {
	private $products;

	function __construct() {
       $this->products = [];
   	}

	public function addProduct(Product $product){
		array_push($this->products, $product);
	}

	public function getProducts(){

		return $this->products;

	}

	public function render(){
		$views = __DIR__;
		$cache = __DIR__ . '/cache';
		$blade = new Blade($views, $cache);

		return $blade->view()->make('products', [ 'products' => $this->getProducts() ])->render();
	}
	
}





?>