<div class="bulks index">
	<h2><?php echo __('Bulks'); ?></h2>
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
	<?php foreach ($bulks as $bulk): ?>
	<tr>
		<td><?php echo h($bulk['Bulk']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bulk['Product']['title'], array('controller' => 'products', 'action' => 'view', $bulk['Product']['id'])); ?>
		</td>
		<td><?php echo h($bulk['Bulk']['price']); ?>&nbsp;</td>
		<td><?php echo h($bulk['Bulk']['packaging']); ?>&nbsp;</td>
		<td><?php echo h($bulk['Bulk']['in_stock']); ?>&nbsp;</td>
		<td><?php echo h($bulk['Bulk']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($bulk['Bulk']['date_modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bulk['Bulk']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bulk['Bulk']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bulk['Bulk']['id']), array(), __('Are you sure you want to delete # %s?', $bulk['Bulk']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bulk'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
