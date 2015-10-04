<div class="marcas view">
<h2><?php echo __('Marca'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['logo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Marca'), array('action' => 'edit', $marca['Marca']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Marca'), array('action' => 'delete', $marca['Marca']['id']), array(), __('Are you sure you want to delete # %s?', $marca['Marca']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($marca['Producto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Marca Id'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Unidad'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Precio Unitario'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th><?php echo __('Img'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($marca['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['id']; ?></td>
			<td><?php echo $producto['marca_id']; ?></td>
			<td><?php echo $producto['descripcion']; ?></td>
			<td><?php echo $producto['unidad']; ?></td>
			<td><?php echo $producto['codigo']; ?></td>
			<td><?php echo $producto['precio_unitario']; ?></td>
			<td><?php echo $producto['stock']; ?></td>
			<td><?php echo $producto['img']; ?></td>
			<td><?php echo $producto['created']; ?></td>
			<td><?php echo $producto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos', 'action' => 'edit', $producto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos', 'action' => 'delete', $producto['id']), array(), __('Are you sure you want to delete # %s?', $producto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
