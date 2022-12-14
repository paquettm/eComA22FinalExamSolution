<?php
$this->view('shared/header', _('Show me the food'));
?>
<p><!--display the data as a table-->
	<table>
		<tr><th><?=_('id')?></th><th><?=_('Name')?></th><th><?=_('action')?></th></tr>
	<?php

	foreach ($data as $item) {
		echo "<tr>
		<td type=id>$item->id</td>
		<td type=name>$item->name</td>
		<td type=action><a href='/Food/delete/$item->id'>delete</a></td>
		</tr>";
	}

?>
</table>
</p>
<form action='' method='post'>
	<?=_('Input the food that you like:')?>
	<input type="text" name="new_food" />
	<input type="submit" name="action" value="<?=_('Send')?>" />
</form>


<ul>
<li><a href='/Main/index'><?=_('back to Index')?></a></li>
<li><a href='/Food/display'><?=_('foods AJAX(JSON) example')?></a></li>
<li><a href='/Vet/index'><?=_('Veterinarian Clinic example')?></a></li>
</ul>

</ul>
<?php
$this->view('shared/footer');
?>