<?php 

namespace SM\Akakce;

use SM\Akakce\AkakceProduct;
use SM\Akakce\AkakceException;
use Illuminate\Support\Facades\View;
use SimpleXMLElement;


class Akakce {
	private $products;

	function __construct() {
       $this->products = [];
   	}

	public function addProduct($product){
		array_push($this->products, $product);
	}

	public function getProducts(){

		return $this->products;

	}

	public function render(){
		return view('products', [ 'products' => $this->products() ]);
	}
	
}





?>