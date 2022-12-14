<?php $this->view('shared/header','Edit client'); ?>
<form action='' method='post'>
	<label><?=_('First name:')?><input type="text" name="first_name"/></label><br>
	<label><?=_('Last name:')?><input type="text" name="last_name"/></label><br>
	<label><?=_('Contact:')?><input type="text" name="contact"/></label><br>
	<input type="submit" name="action" value="<?=_('Save changes')?>" />
</form>
<?php $this->doFeedback(''); ?>
<a href='/Animal/index/<?= \app\core\Model::$input->owner_id ?>'><?=_('Cancel')?></a>
<?php
$this->view('shared/footer');
?>