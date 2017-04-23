<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<products xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
	@foreach ($products as $product)
	  <product>
      @if (!empty($product->getName()))
        <name>{{ $product->getName() }}</name>
	  @endif
	  @if (!empty($product->getSku()))
        <sku>{{ $product->getSku() }}</sku>
	  @endif
	  @if (!empty($product->getUrl()))
        <url>{{ $product->getUrl() }}</url>
	  @endif
	  @if (!empty($product->getImgUrl()))
        <imgUrl>{{ $product->getImgUrl() }}</imgUrl>
	  @endif
	  @if (!empty($product->getDescription()))
        <description><![CDATA[ {{ $product->getDescription() }} ]]></description>
	  @endif
	  @if (!empty($product->getDistributor()))
        <distributor>{{ $product->getDistributor() }}</distributor>
	  @endif
	  @if (!empty($product->getPrice()))
        <price>{{ $product->getPrice() }}</price>
	  @endif
	  @if (!empty($product->getAdditionalImages()))
        @foreach ($product->getAdditionalImages() as $image)
        	<imgUrl>{{ $image }}</imgUrl>
        @endforeach
	  @endif
	  @if (!empty($product->getShipPrice()))
        <shipPrice>{{ $product->getShipPrice() }}</shipPrice>
	  @endif
	  @if (!empty($product->getShipmentVolume()))
        <shipmentVolume>{{ $product->getShipmentVolume() }}</shipmentVolume>
	  @endif
	  @if (!empty($product->getDayOfDelivery()))
        <dayOfDelivery>{{ $product->getDayOfDelivery() }}</dayOfDelivery>
	  @endif
	  @if (!empty($product->getExpressDeliveryTime()))
        <expressDeliveryTime>{{ $product->getExpressDeliveryTime() }}</expressDeliveryTime>
	  @endif
	  @if (!empty($product->getQuantity()))
        <quantity>{{ $product->getQuantity() }}</quantity>
	  @endif
	  @if (!empty($product->getProductBrand()))
        <productBrand>{{ $product->getProductBrand() }}</productBrand>
	  @endif
	  @if (!empty($product->getProductCategory()))
        <productCategory>{{ $product->getProductCategory() }}</productCategory>
	  @endif
	  @if (!empty($product->getBarcode()))
        <barcode>{{ $product->getBarcode() }}</barcode>
	  @endif
	  </product>
    @endforeach
</products>
