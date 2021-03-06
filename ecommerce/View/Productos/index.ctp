<div class="productos index">
	<h2><?php echo __('Productos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('marca_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('unidad'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('precio_unitario'); ?></th>
			<th><?php echo $this->Paginator->sort('stock'); ?></th>
			<th><?php echo $this->Paginator->sort('img'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productos as $producto): ?>
	<tr>
		<td><?php echo h($producto['Producto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producto['Marca']['id'], array('controller' => 'marcas', 'action' => 'view', $producto['Marca']['id'])); ?>
		</td>
		<td><?php echo h($producto['Producto']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['unidad']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['precio_unitario']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['stock']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['img']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['created']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $producto['Producto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $producto['Producto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $producto['Producto']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['Producto']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
	</ul>
</div>
