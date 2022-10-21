<?php
	$this->Html->addCrumb('Food', '/foods/index/');
	$this->Html->addCrumb($product['Subcategory']['title'], '/foods/subcategories/'.$product['Subcategory']['id']);
	$this->Html->addCrumb($product['Product']['title'], '/foods/view/'.$product['Product']['id']);
 ?>




<div class="layer-wrapper">

	<div id="product-view">
			<?php //echo debug($product); ?>

			<div id="product-slides-section">

				<div class="clearfix" >
    				<div class="clearfix">
        				<a href="<?php echo $this->webroot.'img/products/zoom/' .$product['Image'][0]['title'] ?>" class="jqzoom" rel='gal1'  title="<?php echo $product['Product']['title'] ?>" >
            				<img src="<?php echo $this->webroot.'img/products/display/' .$product['Image'][0]['title'] ?>"  title="<?php echo $product['Product']['title'] ?>">
        				</a>
    				</div>
				<br/>
        		<div class="clearfix" >
					<ul id="thumblist" class="clearfix" >
						<?php 
							$imageCount = count($product['Image']);

						for ($i=0; $i < $imageCount; $i++) { ?>

							<li><a class=<?php echo ($i == 0)  ? "zoomThumbActive" : "no"; ?> href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo $this->webroot.'img/products/display/' .$product['Image'][$i]['title'] ?>',largeimage: '<?php echo $this->webroot.'img/products/zoom/' .$product['Image'][$i]['title'] ?>'}"><img src='<?php echo $this->webroot.'img/products/thumbnail/' .$product['Image'][$i]['title'] ?>'></a></li>

					<?php	} ?>
						
					</ul>
				</div>
				</div>
			</div>

			<div id="product-details-section">

				<h1 id="product-details-title"><?php echo $product['Product']['title'] ?></h1>

				<div id="buying-options-instruction">Choose a buying option:</div>
				<div id="buying-options">
					<?php
						echo $this->Form->create('Cart', array('controller'=>'carts','action' => 'add'));
						
						if(!empty($product['Retail']['id'])){
							$retailOptions = array($product['Retail']['price'] => 'Retail');
							$retailAttributes = array('legend' => false, 'product-price'=>$this->Number->currency(($product['Retail']['price']),"₦"),
								'name'=>'buyingOptions', 'value'=>false);
							echo $this->Form->radio('buyingOptions', $retailOptions, $retailAttributes);
						}

						if(!empty($product['Wholesale']['id'])){
							$wholesaleOptions = array($product['Wholesale']['price'] => 'Wholesale');
							$wholesaleAttributes = array('legend' => false, 'product-price'=>$this->Number->currency(($product['Wholesale']['price']),"₦"), 
								'name'=>'buyingOptions', 'value'=>false );
							echo $this->Form->radio('buyingOptions', $wholesaleOptions, $wholesaleAttributes);
						} //else {
							//$wholesaleOptions = array('W' => 'Wholesale');
							//$wholesaleAttributes = array('legend' => false, 'product-price'=>'Call: 0809 999 9863');
							//echo $this->Form->radio('buyingOptions', $wholesaleOptions, $wholesaleAttributes);
						//}

						if(!empty($product['Bulk']['id'])){
							$bulkOptions = array($product['Bulk']['price'] => 'Bulk');
							$bulkAttributes = array('legend' => false, 'product-price'=>$this->Number->currency(($product['Bulk']['price']),"₦"), 
								'name'=>'buyingOptions', 'value'=>false);
							echo $this->Form->radio('buyingOptions', $bulkOptions, $bulkAttributes);
						} //else {
						//	$bulkOptions = array('B' => 'Bulk');
							//$bulkAttributes = array('legend' => false, 'product-price'=>'Call: 0809 999 9863');
							//echo $this->Form->radio('buyingOptions', $bulkOptions, $bulkAttributes);
						//}

					 ?>
				</div>

				<div class="float-holder">
					<div id="variant-price">
						<?php  if(!empty($product['Retail']['id'])){
							echo $this->Number->currency(($product['Retail']['price']),"₦");
						}?>
					</div>
					<div id="qty">
					<?php echo $this->Form->input('quantity', array('type'=>'number', 'id'=>'quantity', 'name'=>'quantity', 'min'=>1, 'value'=>1, 'label'=>'Qty: ')); ?>
					</div>
					<div class="clearfloat"></div>
				</div>
				 <?php echo $this->Form->end(''); ?>

				 


				 <div id="tab-container" class="tab-container">
  						<ul class='etabs'>
    						<li class='tab'><a href="#tabs1">Specifications</a></li>
    						<li class='tab'><a href="#tabs2">Delivery</a></li>
    						<li class='tab'><a href="#tabs3">Returns</a></li>
  						</ul>
  					<div id="tabs1">
  							<div class="description-line">
  								<?php echo $product['Product']['description']; ?>
  							</div>
  							
				 				<?php 

				 					if(!empty($product['Retail']['id'])){ ?>
				 					<div class="group-line"> 
				 						<span class="group-attribute">Retail Price</span><span class="group-value"><?php echo $this->Number->currency(($product['Retail']['price']),"₦") ?><i> (1 item)</i></span>
				 						<div class="clearfloat"></div>
				 					</div>
				 					<?php } 

				 					if(!empty($product['Wholesale']['id'])){ ?>
				 					<div class="group-line">
				 						<span class="group-attribute">Wholesale Price</span><span class="group-value"><?php echo $this->Number->currency(($product['Wholesale']['price']),"₦") ?><i> (<?php echo $product['Wholesale']['packaging'] ?> items in one pack)</i></span>
				 						<div class="clearfloat"></div>
				 					</div>
				 						<?php } 
				 					if(!empty($product['Bulk']['id'])){ ?>
				 					<div class="group-line">
				 						<span class="group-attribute">Bulk Price</span><span class="group-value"><?php echo $this->Number->currency(($product['Bulk']['price']),"₦") ?><i> (<?php echo $product['Bulk']['packaging'] ?> items in one pack)</i></span>
				 						<div class="clearfloat"></div>
				 					</div>
				 				 <?php } ?>




				 			<div class="group-line"> 
				 				<span class="group-attribute">Brand</span><span class="group-value"><?php echo $product['Brand']['title']; ?></span>
				 				<div class="clearfloat"></div>
				 			</div>

				 			<div class="group-line">
				 				<span class="group-attribute">Product #</span><span class="group-value"><?php echo $product['Product']['product_number']; ?></span>
				 				<div class="clearfloat"></div>
				 			</div>

  					</div>

  					<div id="tabs2">
    					<b>Free Delivery :</b> On all orders over<i> Seven Thousand Naira (₦7, 000)</i>
    					<br><br>
    					<b>Standard Local Delivery :</b> Four Hundred Naira. <i>(₦400)</i> 
    					<br><br>
    					<em>Your order should be with you within <i>'24hrs'</i> or <i>(1)</i> working day. (excluding sundays).</em> 
  					</div>

  					<div id="tabs3">
    					If you need to return any item to us, please send it back to us within 2 days of receipt
  					</div>

				</div>

				


			</div>

			<div class="clearfloat"></div>

	</div>

</div>











<script type="text/javascript">

		// I Used Jqzoom for my immage... innerzoom can be changed to standard or 
		// other modes as required [Google Jqzoom to learn how to customize it just in case.]
		// Okechukwu Ezekiel. Web Applications Designer/Developer.

       $(document).ready(function() {
			$('.jqzoom').jqzoom({
            	zoomType: 'innerzoom',
            	preloadImages: false,
            	alwaysOn:false
        	});


			$('input[name=buyingOptions]:first').attr('checked', true);
		// This Script takes care of changing the price displayed based on the selected radio Button 
		

        	jQuery("#buying-options input").click(function(){
            	var price= jQuery(this).attr('product-price');
            	jQuery('#variant-price').text(price);
        	});	


       });
        

    </script>



    <script>


		$(document).ready(function(){
  			$('input').iCheck({
    			checkboxClass: 'icheckbox_square-red',
    			radioClass: 'iradio_square-red',
    			increaseArea: '20%' // optional
  			});
			
  
  		$('#buying-options input').on('ifChecked', function(event){
  			var price= jQuery(this).attr('product-price');
        	jQuery('#variant-price').text(price);
		});

});
</script>



<script type="text/javascript">

$(document).ready(function(){

	// this is the Easy Tabs PLugin Initialization code: 
	//it helps Create the Tabs on the product view page

	$('#tab-container').easytabs();

	
	// This is a support plugin than takes care of hashchange and enables back button

		$(function(){

  			// Bind the event.
 		 	$(window).hashchange( function(){
    		// Alerts every time the hash changes!
    			//alert( location.hash );
  			})

  			// Trigger the event (useful on page load).
 		 	$(window).hashchange();

		});


	});

</script>
