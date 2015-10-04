<div class="productos view">
<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Marca']['id'], array('controller' => 'marcas', 'action' => 'view', $producto['Marca']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidad'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['unidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio Unitario'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['precio_unitario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), array(), __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
	</ul>
</div>
