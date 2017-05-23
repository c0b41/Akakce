<?php 

namespace SM\Akakce;
use SM\Akakce\AkakceException;
use SoapClient;

class Akakce {
	
	private $conf = [];
	private $client = null;
	private $funcs = [];
  	public $debug = false;
	public $uri = 'http://www.akakce.com/akakcem/online-store/siparis-yonetimi/api/orderServices.asmx?wsdl';
	public $sandbox = 'http://178.251.45.210:8080/orderServices/orderServices.asmx?wsdl';
	
	function __construct($conf) {

		if(!isset($conf['username']) && !isset($conf['password'])) {
      		throw new AkakceException("Akakçe Ayarları Girilmedi");
	    }

	    self::conf = $conf;
	    self::setFunctions();  
   	}


   	public function connect(){

   		try {
	        $this->client = new SoapClient(($debug ? $sandbox : $uri), $this->options);

	        $AuthHeader = array("username"=> $this->conf['username'], "password"=> $this->conf['password']);
	        
	        $header = new SoapHeader('http://orderservices.akakce.com/', 'Authentication', $AuthHeader, false);

	        $this->client->__setSoapHeaders(array($header));

	    } catch (SoapFault $sf) {
	        throw new AkakceException($sf);
	    }
   	}

   	private function setFunctions(){
		 self::funcs = [
			 [
			 	"name" => 'Orders',
			 	"reqName" => "getOrders",
 				"resName" => "getOrdersResult"
			 ],
			 [
			 	"name" => 'OrderDetails',
				"reqName" => "getOrderDetails",
 				"resName" => "getOrderDetailsResult"
			 ],
			 [
			 	"name" => 'AcceptOrder',
				"reqName" => "acceptOrder",
 				"resName" => "acceptOrderResult"
			 ],
			 [
			 	"name" => 'RejectOrder',
				"reqName" => "rejectOrder",
 				"resName" => "rejectOrderResult"
			 ],
			 [
			 	"name" => 'ShipmentInfo',
				"reqName" => "setShipmentInfo",
 				"resName" => "setShipmentInfoResult"
			 ],
			 [
			 	"name" => 'CarrierList',
				"reqName" => "getCarrierList",
 				"resName" => "getCarrierListResult"
			 ]
		 ];
	}

	public function methods(){

		if($this->debug && !is_null($this->client))
    	return $this->client->__getFunctions();
	}
	
	public function types(){

		if($this->debug && !is_null($this->client))
	    return $this->client->__getTypes();
	}

	public function __destruct(){
	   if($this->debug && !is_null($this->client))
	   echo $this->client->__getLastRequest();
	}

	private function searchMethod($id, $array) {
	     foreach ($array as $key => $val) {
	         if ($val['name'] === $id) {
	             return $array[$key];
	         }
	     }
	     return null;
  	}

  	public function __call($method, $args = null) {
	    
	    $check = $this->searchMethod($method,$this->funcs);
	    if($check !== null){
	      return $this->request($check['reqName'],$check['resName'],$args);
	    } else {
	      return null;
	    }
	}
	
	private function request($function, $response, $params = null){
	    
	    if(!is_null($this->client)){
	    	if($params != null) {
		      $resp = $this->client->__soapCall($function, $params);
		    } else {
		      $resp = $this->client->__soapCall($function, array());
		    }	
	    } else {
	    	throw new AkakceException("Akakçe Apisine İstek Gönderilebilmesi için önce [connect] methodu kullanılmalı");
	    }
	    
		
		return $resp->$response;
	}
	
}





?>