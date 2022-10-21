<div class="menus view">
<h2><?php echo __('Menu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Menu'), array('action' => 'edit', $menu['Menu']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Menu'), array('action' => 'delete', $menu['Menu']['id']), array(), __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submenus'), array('controller' => 'submenus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submenu'), array('controller' => 'submenus', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Submenus'); ?></h3>
	<?php if (!empty($menu['Submenu'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menu['Submenu'] as $submenu): ?>
		<tr>
			<td><?php echo $submenu['id']; ?></td>
			<td><?php echo $submenu['menu_id']; ?></td>
			<td><?php echo $submenu['title']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'submenus', 'action' => 'view', $submenu['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'submenus', 'action' => 'edit', $submenu['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'submenus', 'action' => 'delete', $submenu['id']), array(), __('Are you sure you want to delete # %s?', $submenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Submenu'), array('controller' => 'submenus', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
