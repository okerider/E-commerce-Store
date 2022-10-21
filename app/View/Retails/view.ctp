<div class="retails view">
<h2><?php echo __('Retail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($retail['Retail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($retail['Product']['title'], array('controller' => 'products', 'action' => 'view', $retail['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($retail['Retail']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Packaging'); ?></dt>
		<dd>
			<?php echo h($retail['Retail']['packaging']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Stock'); ?></dt>
		<dd>
			<?php echo h($retail['Retail']['in_stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($retail['Retail']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($retail['Retail']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Retail'), array('action' => 'edit', $retail['Retail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Retail'), array('action' => 'delete', $retail['Retail']['id']), array(), __('Are you sure you want to delete # %s?', $retail['Retail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Retails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
