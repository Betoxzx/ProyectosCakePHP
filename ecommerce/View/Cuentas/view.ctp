<div class="cuentas view">
<h2><?php echo __('Cuenta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Paterno'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['apellido_paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Materno'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['apellido_materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Validado'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['validado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cuenta'), array('action' => 'edit', $cuenta['Cuenta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cuenta'), array('action' => 'delete', $cuenta['Cuenta']['id']), array(), __('Are you sure you want to delete # %s?', $cuenta['Cuenta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clientes'); ?></h3>
	<?php if (!empty($cuenta['Cliente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellido Paterno'); ?></th>
		<th><?php echo __('Apellido Materno'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Razon Social'); ?></th>
		<th><?php echo __('Rfc'); ?></th>
		<th><?php echo __('Calle'); ?></th>
		<th><?php echo __('Colonia'); ?></th>
		<th><?php echo __('Cp'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Documento R'); ?></th>
		<th><?php echo __('Documento D'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Validado'); ?></th>
		<th><?php echo __('Img'); ?></th>
		<th><?php echo __('Cuenta Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cuenta['Cliente'] as $cliente): ?>
		<tr>
			<td><?php echo $cliente['id']; ?></td>
			<td><?php echo $cliente['nombres']; ?></td>
			<td><?php echo $cliente['apellido_paterno']; ?></td>
			<td><?php echo $cliente['apellido_materno']; ?></td>
			<td><?php echo $cliente['email']; ?></td>
			<td><?php echo $cliente['password']; ?></td>
			<td><?php echo $cliente['razon_social']; ?></td>
			<td><?php echo $cliente['rfc']; ?></td>
			<td><?php echo $cliente['calle']; ?></td>
			<td><?php echo $cliente['colonia']; ?></td>
			<td><?php echo $cliente['cp']; ?></td>
			<td><?php echo $cliente['estado']; ?></td>
			<td><?php echo $cliente['telefono']; ?></td>
			<td><?php echo $cliente['documento_r']; ?></td>
			<td><?php echo $cliente['documento_d']; ?></td>
			<td><?php echo $cliente['descripcion']; ?></td>
			<td><?php echo $cliente['validado']; ?></td>
			<td><?php echo $cliente['img']; ?></td>
			<td><?php echo $cliente['cuenta_id']; ?></td>
			<td><?php echo $cliente['created']; ?></td>
			<td><?php echo $cliente['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clientes', 'action' => 'view', $cliente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clientes', 'action' => 'edit', $cliente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clientes', 'action' => 'delete', $cliente['id']), array(), __('Are you sure you want to delete # %s?', $cliente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
