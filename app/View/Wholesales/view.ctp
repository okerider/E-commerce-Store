<div class="wholesales view">
<h2><?php echo __('Wholesale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($wholesale['Wholesale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wholesale['Product']['title'], array('controller' => 'products', 'action' => 'view', $wholesale['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($wholesale['Wholesale']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Packaging'); ?></dt>
		<dd>
			<?php echo h($wholesale['Wholesale']['packaging']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Stock'); ?></dt>
		<dd>
			<?php echo h($wholesale['Wholesale']['in_stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($wholesale['Wholesale']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($wholesale['Wholesale']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wholesale'), array('action' => 'edit', $wholesale['Wholesale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wholesale'), array('action' => 'delete', $wholesale['Wholesale']['id']), array(), __('Are you sure you want to delete # %s?', $wholesale['Wholesale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wholesales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wholesale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
