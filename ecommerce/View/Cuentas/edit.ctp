<div class="cuentas form">
<?php echo $this->Form->create('Cuenta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cuenta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellido_paterno');
		echo $this->Form->input('apellido_materno');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('telefono');
		echo $this->Form->input('validado');
		echo $this->Form->input('img');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cuenta.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cuenta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
