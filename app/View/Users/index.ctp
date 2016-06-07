<div class="users index">
	<h2>Lista zapisanych zawodników</h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name','imię'); ?></th>
			<th><?php echo $this->Paginator->sort('surname','nazwisko'); ?></th>
			<th><?php echo $this->Paginator->sort('age','wiek'); ?></th>
			<th><?php echo $this->Paginator->sort('addres','adres'); ?></th>
			<th><?php echo $this->Paginator->sort('email','email'); ?></th>
			<th><?php echo $this->Paginator->sort('category','kategoria'); ?></th>
			
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['surname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['age']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addres']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['category']); ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
<div class="actions">
	<h3>Rejestracja</h3>
        <?php
            if(count($user) < 5){ 
        ?>
	<ul>
		<li><?php echo $this->Html->link("Zapisz się", array('action' => 'add')); ?></li>
	</ul>
        
        <?php
            }else {
                echo 'Zamknięta';
            }
        ?>
        <h3>Wolne miejsca</h3>
        <?php
        echo 5 - count($user);
        ?>
</div>
