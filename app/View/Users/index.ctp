<div class="users index">
	<h2>Lista startowa</h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id','Numer'); ?></th>
			<th><?php echo $this->Paginator->sort('name','Imię'); ?></th>
			<th><?php echo $this->Paginator->sort('surname','Nazwisko'); ?></th>
			<th><?php echo $this->Paginator->sort('age','Wiek'); ?></th>
			<th><?php echo $this->Paginator->sort('addres','Adres'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Email'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id','Kategoria'); ?></th>
			
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['surname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['age']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['addres']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                <td><?php echo h($user['Category']['name']); ?>&nbsp;</td>
		
		
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
	<div class="paging" style="display:none">
	
        
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3>Rejestracja</h3>
        <?php
            if(count($users) < 5){ 
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
        echo 5 - count($users);
        ?>
</div>