<div class="wholesales index">
	<h2><?php echo __('Wholesales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('packaging'); ?></th>
			<th><?php echo $this->Paginator->sort('in_stock'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('date_modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($wholesales as $wholesale): ?>
	<tr>
		<td><?php echo h($wholesale['Wholesale']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($wholesale['Product']['title'], array('controller' => 'products', 'action' => 'view', $wholesale['Product']['id'])); ?>
		</td>
		<td><?php echo h($wholesale['Wholesale']['price']); ?>&nbsp;</td>
		<td><?php echo h($wholesale['Wholesale']['packaging']); ?>&nbsp;</td>
		<td><?php echo h($wholesale['Wholesale']['in_stock']); ?>&nbsp;</td>
		<td><?php echo h($wholesale['Wholesale']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($wholesale['Wholesale']['date_modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wholesale['Wholesale']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wholesale['Wholesale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wholesale['Wholesale']['id']), array(), __('Are you sure you want to delete # %s?', $wholesale['Wholesale']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Wholesale'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
