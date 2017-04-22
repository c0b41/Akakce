<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<products xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
	@foreach ($products as $product)
      @if (!isnull($product->getSku()))
        <sku>{{ $product->getSku() }}</sku>
	  @endif
	  @if (!isnull($product->getName()))
        <name>{{ $product->getName() }}</name>
	  @endif
	  @if (!isnull($product->getName()))
        <name>{{ $product->getName() }}</name>
	  @endif
	  @if (!isnull($product->getUrl()))
        <url>{{ $product->getUrl() }}</url>
	  @endif
	  @if (!isnull($product->getImgUrl()))
        <imgUrl>{{ $product->getImgUrl() }}</imgUrl>
	  @endif
	  @if (!isnull($product->getDescription()))
        <description><![CDATA[ {{ $product->getDescription() }} ]]></description>
	  @endif
	  @if (!isnull($product->getDistributor()))
        <distributor>{{ $product->getDistributor() }}</distributor>
	  @endif
	  @if (!isnull($product->getPrice()))
        <price>{{ $product->getPrice() }}</price>
	  @endif
	  @if (!isnull($product->getAdditionalImages()))
        @foreach ($product->getAdditionalImages() as $image)
        	<imgUrl>{{ $image }}</imgUrl>
        @endforeach
	  @endif
	  @if (!isnull($product->getShipPrice()))
        <shipPrice>{{ $product->getShipPrice() }}</shipPrice>
	  @endif
	  @if (!isnull($product->getShipmentVolume()))
        <shipmentVolume>{{ $product->getShipmentVolume() }}</shipmentVolume>
	  @endif
	  @if (!isnull($product->getShipmentDayOfDelivery()))
        <dayOfDelivery>{{ $product->getShipmentDayOfDelivery() }}</dayOfDelivery>
	  @endif
	  @if (!isnull($product->getExpressDeliveryTime()))
        <expressDeliveryTime>{{ $product->getExpressDeliveryTime() }}</expressDeliveryTime>
	  @endif
	  @if (!isnull($product->getQuantity()))
        <quantity>{{ $product->getQuantity() }}</quantity>
	  @endif
	  @if (!isnull($product->getProductBrand()))
        <productBrand>{{ $product->getProductBrand() }}</productBrand>
	  @endif
	  @if (!isnull($product->getProductCategory()))
        <productCategory>{{ $product->getProductCategory() }}</productCategory>
	  @endif
	  @if (!isnull($product->getBarcode()))
        <barcode>{{ $product->getBarcode() }}</barcode>
	  @endif
    @endforeach
</products>
