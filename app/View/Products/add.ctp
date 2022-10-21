<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('subcategory_id');
		echo $this->Form->input('brand_id');
		echo $this->Form->input('product_number');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
		echo $this->Form->input('Type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bulks'), array('controller' => 'bulks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bulk'), array('controller' => 'bulks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Retails'), array('controller' => 'retails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retail'), array('controller' => 'retails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wholesales'), array('controller' => 'wholesales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wholesale'), array('controller' => 'wholesales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
	</ul>
</div>
