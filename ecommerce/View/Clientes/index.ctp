<div class="clientes index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_materno'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('razon_social'); ?></th>
			<th><?php echo $this->Paginator->sort('rfc'); ?></th>
			<th><?php echo $this->Paginator->sort('calle'); ?></th>
			<th><?php echo $this->Paginator->sort('colonia'); ?></th>
			<th><?php echo $this->Paginator->sort('cp'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('documento_r'); ?></th>
			<th><?php echo $this->Paginator->sort('documento_d'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('validado'); ?></th>
			<th><?php echo $this->Paginator->sort('img'); ?></th>
			<th><?php echo $this->Paginator->sort('cuenta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellido_paterno']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellido_materno']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['password']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['razon_social']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['rfc']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['calle']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['colonia']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cp']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['estado']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['documento_r']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['documento_d']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['validado']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['img']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['Cuenta']['id'], array('controller' => 'cuentas', 'action' => 'view', $cliente['Cuenta']['id'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['created']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cliente['Cliente']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
	</ul>
</div>
