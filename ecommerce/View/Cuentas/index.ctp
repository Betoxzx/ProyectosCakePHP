<div class="cuentas index">
	<h2><?php echo __('Cuentas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_materno'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('validado'); ?></th>
			<th><?php echo $this->Paginator->sort('img'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cuentas as $cuenta): ?>
	<tr>
		<td><?php echo h($cuenta['Cuenta']['id']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['apellido_paterno']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['apellido_materno']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['email']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['password']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['validado']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['img']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['created']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cuenta['Cuenta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cuenta['Cuenta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cuenta['Cuenta']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cuenta['Cuenta']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Cuenta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
