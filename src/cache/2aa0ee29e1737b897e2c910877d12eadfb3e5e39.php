<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<products xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
	<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  <product>
      <?php if(!empty($product->getName())): ?>
        <name><?php echo e($product->getName()); ?></name>
	  <?php endif; ?>
	  <?php if(!empty($product->getSku())): ?>
        <sku><?php echo e($product->getSku()); ?></sku>
	  <?php endif; ?>
	  <?php if(!empty($product->getUrl())): ?>
        <url><?php echo e($product->getUrl()); ?></url>
	  <?php endif; ?>
	  <?php if(!empty($product->getImgUrl())): ?>
        <imgUrl><?php echo e($product->getImgUrl()); ?></imgUrl>
	  <?php endif; ?>
	  <?php if(!empty($product->getDescription())): ?>
        <description><![CDATA[ <?php echo e($product->getDescription()); ?> ]]></description>
	  <?php endif; ?>
	  <?php if(!empty($product->getDistributor())): ?>
        <distributor><?php echo e($product->getDistributor()); ?></distributor>
	  <?php endif; ?>
	  <?php if(!empty($product->getPrice())): ?>
        <price><?php echo e($product->getPrice()); ?></price>
	  <?php endif; ?>
	  <?php if(!empty($product->getAdditionalImages())): ?>
        <?php $__currentLoopData = $product->getAdditionalImages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<imgUrl><?php echo e($image); ?></imgUrl>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  <?php endif; ?>
	  <?php if(!empty($product->getShipPrice())): ?>
        <shipPrice><?php echo e($product->getShipPrice()); ?></shipPrice>
	  <?php endif; ?>
	  <?php if(!empty($product->getShipmentVolume())): ?>
        <shipmentVolume><?php echo e($product->getShipmentVolume()); ?></shipmentVolume>
	  <?php endif; ?>
	  <?php if(!empty($product->getDayOfDelivery())): ?>
        <dayOfDelivery><?php echo e($product->getDayOfDelivery()); ?></dayOfDelivery>
	  <?php endif; ?>
	  <?php if(!empty($product->getExpressDeliveryTime())): ?>
        <expressDeliveryTime><?php echo e($product->getExpressDeliveryTime()); ?></expressDeliveryTime>
	  <?php endif; ?>
	  <?php if(!empty($product->getQuantity())): ?>
        <quantity><?php echo e($product->getQuantity()); ?></quantity>
	  <?php endif; ?>
	  <?php if(!empty($product->getProductBrand())): ?>
        <productBrand><?php echo e($product->getProductBrand()); ?></productBrand>
	  <?php endif; ?>
	  <?php if(!empty($product->getProductCategory())): ?>
        <productCategory><?php echo e($product->getProductCategory()); ?></productCategory>
	  <?php endif; ?>
	  <?php if(!empty($product->getBarcode())): ?>
        <barcode><?php echo e($product->getBarcode()); ?></barcode>
	  <?php endif; ?>
	  </product>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</products>
