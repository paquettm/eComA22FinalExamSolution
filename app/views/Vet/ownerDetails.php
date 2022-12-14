<?php
$this->view('shared/header', 'Client Details');
?>
<dl>
	<dt>
		<?=_('First name:')?>
	</dt>
	<dd>
		<?= $data->first_name ?>
	</dd>
	<dt>
		<?=_('Last name:')?>
	</dt>
	<dd>
		<?= $data->last_name ?>
	</dd>
	<dt>
		<?=_('Contact:')?>
	</dt>
	<dd>
		<?= $data->contact ?>
	</dd>
</dl>

<a href='/Vet/index'><?=_('Back to index')?></a>
<?php
$this->view('shared/footer');
?>