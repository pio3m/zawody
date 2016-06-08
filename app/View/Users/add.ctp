<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' =>'Imię'));
		echo $this->Form->input('surname', array('label' =>'Nazwisko'));
		echo $this->Form->input('age', array('label' =>'Wiek'));
		echo $this->Form->input('addres', array('label' =>'Adres zamieszkania'));
		echo $this->Form->input('email', array('label' =>'Adres e-mail'));
		echo $this->Form->input('category_id', array('label' => 'Kategoria', 'options' => $options));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
