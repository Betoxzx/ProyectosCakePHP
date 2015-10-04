<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Paterno'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellido_paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Materno'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellido_materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Razon Social'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['razon_social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfc'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['rfc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calle'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['calle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Colonia'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['colonia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cp'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento R'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['documento_r']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento D'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['documento_d']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Validado'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['validado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuenta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Cuenta']['id'], array('controller' => 'cuentas', 'action' => 'view', $cliente['Cuenta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
	</ul>
</div>
