<?php
$this->view('shared/header', _('Client Animals'));
?>
<!-- display the details for this client/owner -->
<?php $this->view('Owner/detailsPartial', $data['owner']); ?>

<p><!--display the list of animals owned by this client/owner-->
	<a href="/Animal/add/<?= $data['owner']->owner_id ?>"><?=_('Add a new animal')?></a>
	<table>
		<tr><th><?=_('Name')?></th><th><?=_('DOB')?></th><th><?=_('action')?></th></tr>
	<?php

	foreach ($data['animals'] as $item) {
		echo "<tr>
		<td type=name>$item->name</td>
		<td type=name>$item->dob</td>
		<td type=action>
		<a href='/Animal/edit/$item->animal_id'>"._('edit')."</a> | 
		<a href='/Animal/details/$item->animal_id'>"._('details')."</a> |
		<a href='/Animal/delete/$item->animal_id'>"._('delete')."</a>
		</td>
		</tr>";
	}

?>
</table>
</p>

<a href='/Vet/index'><?=_('Back to the client list')?></a>

<?php
$this->view('shared/footer');
?>