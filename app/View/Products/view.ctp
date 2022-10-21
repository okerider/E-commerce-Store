<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Subcategory']['title'], array('controller' => 'subcategories', 'action' => 'view', $product['Subcategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Brand']['title'], array('controller' => 'brands', 'action' => 'view', $product['Brand']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Number'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($product['Product']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array(), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
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
	<div class="related">
		<h3><?php echo __('Related Bulks'); ?></h3>
	<?php if (!empty($product['Bulk'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $product['Bulk']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Product Id'); ?></dt>
		<dd>
	<?php echo $product['Bulk']['product_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
	<?php echo $product['Bulk']['price']; ?>
&nbsp;</dd>
		<dt><?php echo __('Packaging'); ?></dt>
		<dd>
	<?php echo $product['Bulk']['packaging']; ?>
&nbsp;</dd>
		<dt><?php echo __('In Stock'); ?></dt>
		<dd>
	<?php echo $product['Bulk']['in_stock']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
	<?php echo $product['Bulk']['date_created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
	<?php echo $product['Bulk']['date_modified']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Bulk'), array('controller' => 'bulks', 'action' => 'edit', $product['Bulk']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Retails'); ?></h3>
	<?php if (!empty($product['Retail'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $product['Retail']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Product Id'); ?></dt>
		<dd>
	<?php echo $product['Retail']['product_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
	<?php echo $product['Retail']['price']; ?>
&nbsp;</dd>
		<dt><?php echo __('Packaging'); ?></dt>
		<dd>
	<?php echo $product['Retail']['packaging']; ?>
&nbsp;</dd>
		<dt><?php echo __('In Stock'); ?></dt>
		<dd>
	<?php echo $product['Retail']['in_stock']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
	<?php echo $product['Retail']['date_created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
	<?php echo $product['Retail']['date_modified']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Retail'), array('controller' => 'retails', 'action' => 'edit', $product['Retail']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Wholesales'); ?></h3>
	<?php if (!empty($product['Wholesale'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $product['Wholesale']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Product Id'); ?></dt>
		<dd>
	<?php echo $product['Wholesale']['product_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
	<?php echo $product['Wholesale']['price']; ?>
&nbsp;</dd>
		<dt><?php echo __('Packaging'); ?></dt>
		<dd>
	<?php echo $product['Wholesale']['packaging']; ?>
&nbsp;</dd>
		<dt><?php echo __('In Stock'); ?></dt>
		<dd>
	<?php echo $product['Wholesale']['in_stock']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
	<?php echo $product['Wholesale']['date_created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
	<?php echo $product['Wholesale']['date_modified']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Wholesale'), array('controller' => 'wholesales', 'action' => 'edit', $product['Wholesale']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Images'); ?></h3>
	<?php if (!empty($product['Image'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Image'] as $image): ?>
		<tr>
			<td><?php echo $image['id']; ?></td>
			<td><?php echo $image['product_id']; ?></td>
			<td><?php echo $image['title']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'images', 'action' => 'view', $image['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'images', 'action' => 'edit', $image['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images', 'action' => 'delete', $image['id']), array(), __('Are you sure you want to delete # %s?', $image['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Types'); ?></h3>
	<?php if (!empty($product['Type'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Subcategory Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Type'] as $type): ?>
		<tr>
			<td><?php echo $type['id']; ?></td>
			<td><?php echo $type['subcategory_id']; ?></td>
			<td><?php echo $type['title']; ?></td>
			<td><?php echo $type['description']; ?></td>
			<td><?php echo $type['date_created']; ?></td>
			<td><?php echo $type['date_modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'types', 'action' => 'view', $type['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'types', 'action' => 'edit', $type['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'types', 'action' => 'delete', $type['id']), array(), __('Are you sure you want to delete # %s?', $type['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
