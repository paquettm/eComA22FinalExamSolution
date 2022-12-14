<?php
$this->view('shared/header', _('User account'));
?>
<?php
	if(isset($_GET['error'])){ ?>
<div class="alert alert-danger" role="alert">
  <?= $_GET['error'] ?>
</div>
<?php	}
	if(isset($_GET['message'])){ ?>
<div class="alert alert-success" role="alert">
  <?= $_GET['message'] ?>
</div>
<?php	}
?>

<h1><?=_('Modify your password')?></h1>
<form action='' method='post'>
	<label><?=_('Old password:')?><input type="password" name="old_password" /></label><br>
	<label><?=_('New password:')?><input type="password" name="password" /></label><br>
	<label><?=_('New password confirmation:')?><input type="password" name="password_confirm" /></label><br>
	<input type="submit" name="action" value="<?=_('Change password')?>" />
</form>

<a href="/User/logout"><?=_('logout')?></a>

<?php
$this->view('shared/footer');
?>