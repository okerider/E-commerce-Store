<?php 

 $this->Html->addCrumb('Food', '/foods/index/');

?>



<div class="layer-wrapper">
	<div id="first-ad"></div>
</div>

<div class="layer-wrapper">

		<div id="sort-area">
			<div class="sort-list">
				
				<?php echo $this->element('categories_menu'); ?>

			</div>

		</div>



		<div id="display-area">

			<?php foreach ($products as $product) { 
					//echo debug($product); 
				?>
				
				<div class="product">
					<div class="catalog-image"><?php echo $this->Html->image('products/catalog/' .$product['Image']['0']['title'], 
						array('alt'=> $product['Product']['title']));?></div>
					<div class="call-to-action"><a href="<?php echo $this->webroot.'foods/lightbox/'.$product['Product']['id'] ?>" class="mPopup">Buy</a></div>
					<div class="product-name"><?php echo $product['Product']['title']; ?></div>
					<div class="price"><?php echo $this->Number->currency(($product['Retail']['price']),"₦")?><span class="other-action"><?php echo $this->Html->link('More Details', '/foods/view/' .$product['Product']['id']) ?></span></div>
				</div>


			<?php } ?>

			
			
			<div class="clearfloat"></div>

		</div>
		<div class="clearfloat"></div>

</div>



<script type="text/javascript">

	$('document').ready(function(){

		// this section handles converting the list Subcategories and types into lists format. 

	$('#food-tree ul')
		.hide()
		.prev('span')
		.before('<span></span>')
		.prev()
		.addClass('handle closed')
		.click(function() {
		// plus/minus handle click
		$(this)
		.toggleClass('closed opened')
		.nextAll('ul')
		.toggle();
	});




	// Magnific-popup codes go here for the buy button

		$('.mPopup').magnificPopup({
  			type: 'iframe'
		});




});




</script>