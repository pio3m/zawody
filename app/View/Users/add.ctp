<?php echo $this->Html->script('jquery-1.12.4',false); ?>
<?php echo $this->Html->script('validation',false); ?>

<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' =>'Imię', 'id'=> 'name'));
		echo $this->Form->input('surname', array('label' =>'Nazwisko', 'id'=> 'surname'));
		echo $this->Form->input('age', array('label' =>'Wiek', 'id'=> 'age'));
		echo $this->Form->input('addres', array('label' =>'Adres zamieszkania', 'id'=> 'addres'));
		echo $this->Form->input('email', array('label' =>'Adres e-mail', 'id'=> 'email'));
		echo $this->Form->input('category_id', array('id'=> 'catergory','label' => 'Kategoria', 'options' => $options));
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