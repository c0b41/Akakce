<?php 

namespace SM\Akakce\AkakceProduct;


 /**
 * Product 
 * 
 * @package    SM\Akakce
 * @author     Ayhan Kuru <ayhankuru@yandex.com>
 */

class Product {
	
	protected $name, $sku, $url,
		   $imgUrl, $additionalimages,
		   $description, $distributor, $price,
		   $shipPrice, $shipmentVolume, $dayOfDelivery,
		   $expressDeliveryTime, $quantity, $productBrand,
		   $productCategory, $barcode;

	/**
    * Ürün adının belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param string $name Ürün Adı
    */
	public function setName($name){
		$this->name = $name;
	}

	/**
    * Ürün adına erişmek için kullanılması gereken fonksiyon
    *
    * @return $name string
    */
	public function getName(){
		return $this->name;
	}

	/**
    * Ürün Sku'su belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $sku string
    */
	public function setSku($sku){
		$this->sku = $sku;	
	}

	/**
    * Ürün Sku'suna erişmek için kullanılması gereken fonksiyon
    *
    * @return $sku string
    */
	public function getSku(){
		return $this->sku;
	}

	/**
    * Ürün Url'si belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $url string
    */
	public function setUrl($url){
		$this->url = $url;
	}

	/**
    * Ürün Url'sine erişmek için kullanılması gereken fonksiyon
    *
    * @return $url string
    */
	public function getUrl(){
		return $this->url;
	}

	/**
    * Ürün Fotoğrafı belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $imgUrl string
    */
	public function setImgUrl($imgUrl){
		$this->imgUrl =  $imgUrl;
	}

	/**
    * Ürün Fotoğrafına erişmek için kullanılması gereken fonksiyon
    *
    * @return $imgUrl string
    */
	public function getImgUrl(){
		return $this->imgUrl;
	}

	/**
    * Ürün Fotoğraflarının belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $imgUrl string
    */
	public function setAdditionalImages(Array $images){
		$this->additionalimages = $images;
	}

	/**
    * Ürün Fotoğraflarına erişmek için kullanılması gereken fonksiyon
    *
    * @return $imgUrl string
    */
	public function getAdditionalImages(){
		return $this->additionalimages;
	}

	/**
    * Ürün açıklaması belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $description string
    */
	public function setDescription($description){
		$this->description = $description;
	}

	/**
    * Ürün açıklaması erişmek için kullanılması gereken fonksiyon
    *
    * @return $description string
    */
	public function getDescription(){
		return $this->description;
	}

	/**
    * Ürün distribütör garantisi belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $distributor boolean
    */
	public function setDistributor($distributor){
		$this->distributor = $distributor;
	}

	/**
    * Ürün distribütör bilgisine erişmek için kullanılması gereken fonksiyon
    *
    * @return $distributor boolean
    */
	public function getDistributor(){
		return $this->distributor;
	}

	/**
    * Ürün fiyatının belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $price integer
    */
	public function setPrice($price){
		$this->price = $price;
	}

	/**
    * Ürün fiyatına erişmek için kullanılması gereken fonksiyon
    *
    * @return $price integer
    */
	public function getPrice(){
		return $this->price;
	}

	/**
    * Ürün kargo fiyatının belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $shipPrice integer
    */
	public function setShipPrice($shipPrice){
		$this->shipPrice = $shipPrice;
	}

	/**
    * Ürün kargo fiyatına erişmek için kullanılması gereken fonksiyon
    *
    * @return $shipPrice integer
    */
	public function getShipPrice(){
		return $this->shipPrice;
	}

	/**
    * Ürün'nün Desi bilgisinin belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $shipmentVolume integer
    */
	public function setShipmentVolume($shipmentVolume){
		$this->shipmentVolume = $shipmentVolume;
	}

	/**
    * Ürün'nün Desi bilgisine erişmek için kullanılması gereken fonksiyon
    *
    * @return $shipmentVolume integer
    */
	public function getShipmentVolume(){
		return $this->shipmentVolume;
	}

	/**
    * Ürün'nün Kargoya Verilme bilgisinin belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $dayOfDelivery integer
    */
	public function setDayOfDelivery($dayOfDelivery){
		$this->dayOfDelivery = $dayOfDelivery;
	}

	/**
    * Ürün'nün Kargoya Verilme bilgisine erişmek için kullanılması gereken fonksiyon
    *
    * @return $dayOfDelivery integer
    */
	public function getDayOfDelivery(){
		return $this->dayOfDelivery;
	}

	/**
    * Ürün'nün Kargoya Verilme Saati bilgisinin belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $expressDeliveryTime integer
    */
	public function setExpressDeliveryTime($expressDeliveryTime){
		$this->expressDeliveryTime = $expressDeliveryTime;
	}

	/**
    * Ürün'nün Kargoya Verilme Saati bilgisine erişmek için kullanılması gereken fonksiyon
    *
    * @return $expressDeliveryTime integer
    */
	public function getExpressDeliveryTime(){
		return $this->expressDeliveryTime;
	}

	/**
    * Ürün adetinin belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $quantity integer
    */
	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	/**
    * Ürün'nün adet bilgisine erişmek için kullanılması gereken fonksiyon
    *
    * @return $quantity integer
    */
	public function getQuantity(){
		return $this->quantity;
	}

	/**
    * Ürün markasının belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $productBrand string
    */
	public function setProductBrand($productBrand){
		$this->productBrand = $productBrand;
	}

	/**
    * Ürün'nün marka bilgisine erişmek için kullanılması gereken fonksiyon
    *
    * @return $productBrand string
    */
	public function getProductBrand(){
		return $this->productBrand;
	}

	/**
    * Ürün kategorisinin belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $productCategory string
    */
	public function setProductCategory($productCategory){
		$this->productCategory = $productCategory;
	}

	/**
    * Ürün'nün kategori bilgisine erişmek için kullanılması gereken fonksiyon
    *
    * @return $productCategory string
    */
	public function getProductCategory(){
		return $this->productCategory;
	}

	/**
    * Ürün barkod bilgisinin belirlenmesi için kullanılması gereken fonksiyon
    *
    * @param $barcode string
    */
	public function setBarcode($barcode){
		$this->barcode = $barcode;
	}

	/**
    * Ürün'nün barkod bilgisine erişmek için kullanılması gereken fonksiyon
    *
    * @return $barcode string
    */
	public function getBarcode(){
		return $this->barcode;
	}

}




?>