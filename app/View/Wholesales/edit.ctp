<div class="wholesales form">
<?php echo $this->Form->create('Wholesale'); ?>
	<fieldset>
		<legend><?php echo __('Edit Wholesale'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Wholesale.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Wholesale.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Wholesales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
