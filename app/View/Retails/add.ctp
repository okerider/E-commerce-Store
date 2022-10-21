<div class="retails form">
<?php echo $this->Form->create('Retail'); ?>
	<fieldset>
		<legend><?php echo __('Add Retail'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('price');
		echo $this->Form->input('packaging');
		echo $this->Form->input('in_stock');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Retails'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
