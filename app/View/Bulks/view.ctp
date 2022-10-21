<div class="bulks view">
<h2><?php echo __('Bulk'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bulk['Bulk']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bulk['Product']['title'], array('controller' => 'products', 'action' => 'view', $bulk['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($bulk['Bulk']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Packaging'); ?></dt>
		<dd>
			<?php echo h($bulk['Bulk']['packaging']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Stock'); ?></dt>
		<dd>
			<?php echo h($bulk['Bulk']['in_stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($bulk['Bulk']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($bulk['Bulk']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bulk'), array('action' => 'edit', $bulk['Bulk']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bulk'), array('action' => 'delete', $bulk['Bulk']['id']), array(), __('Are you sure you want to delete # %s?', $bulk['Bulk']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bulks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bulk'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
