<?php
$this->view('shared/header', 'Vet Clinic Client List');
?>
<p><!--display the data as a table-->
	<a href="/Vet/add"><?=_('Add a new client')?></a>
	<table>
		<tr><th><?=_('First Name')?></th><th><?=_('Last Name')?></th><th><?=_('Contact')?></th><th><?=_('action')?></th></tr>
	<?php

	foreach ($data as $item) {
		echo "<tr>
		<td type=name>$item->first_name</td>
		<td type=name>$item->last_name</td>
		<td type=name>$item->contact</td>
		<td type=action>
		<a href='/Animal/index/$item->owner_id'>"._('details')."</a> |
		<a href='/Vet/delete/$item->owner_id'>"._('delete')."</a> |
		</td>
		</tr>";
	}

?>
</table>
</p>

<ul>
<li><a href='/Main/index'><?=_('Main index')?></a></li>
</ul>

<?php
$this->view('shared/footer');
?>