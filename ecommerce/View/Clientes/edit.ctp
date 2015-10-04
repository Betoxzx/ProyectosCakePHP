<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellido_paterno');
		echo $this->Form->input('apellido_materno');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('razon_social');
		echo $this->Form->input('rfc');
		echo $this->Form->input('calle');
		echo $this->Form->input('colonia');
		echo $this->Form->input('cp');
		echo $this->Form->input('estado');
		echo $this->Form->input('telefono');
		echo $this->Form->input('documento_r');
		echo $this->Form->input('documento_d');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('validado');
		echo $this->Form->input('img');
		echo $this->Form->input('cuenta_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cliente.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cliente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
	</ul>
</div>
