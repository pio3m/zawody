<?php echo $this->Html->script('jquery-1.12.4',false); ?>
<?php echo $this->Html->script('validation',false); ?>

<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend>Rejestracja</legend>
	<?php
		echo $this->Form->input('name', array('label' =>'Imię', 'id'=> 'name'));
		echo $this->Form->input('surname', array('label' =>'Nazwisko', 'id'=> 'surname'));
		echo $this->Form->input('age', array('label' =>'Wiek', 'id'=> 'age'));
		echo $this->Form->input('addres', array('label' =>'Adres zamieszkania', 'id'=> 'addres'));
		echo $this->Form->input('email', array('label' =>'Adres e-mail', 'id'=> 'email'));
		echo $this->Form->input('category_id', array('id'=> 'catergory','label' => 'Kategoria', 'options' => $options));
	?>
	</fieldset>
<?php echo $this->Form->end('Zapisz'); ?>
</div>
<div class="actions">
	<h3>Menu</h3>
	<ul>

		<li><?php echo $this->Html->link('Lista uczestników', array('action' => 'index')); ?></li>
		</ul>
</div>