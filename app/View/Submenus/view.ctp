<div class="submenus view">
<h2><?php echo __('Submenu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($submenu['Submenu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submenu['Menu']['title'], array('controller' => 'menus', 'action' => 'view', $submenu['Menu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($submenu['Submenu']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submenu'), array('action' => 'edit', $submenu['Submenu']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submenu'), array('action' => 'delete', $submenu['Submenu']['id']), array(), __('Are you sure you want to delete # %s?', $submenu['Submenu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Submenus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submenu'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
