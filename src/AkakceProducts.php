<?php 

namespace SM\Akakce\AkakceProducts;

use SM\Akakce\AkakceProduct\Product;
use Philo\Blade\Blade;

 /**
 * Products
 * 
 * @package    SM\Akakce
 * @author     Ayhan Kuru <ayhankuru@yandex.com>
 */

class Products {
	
	protected $products = [];

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