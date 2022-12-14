<?php
$this->view('shared/header', _('Login'));
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

$inputs = [
['name'=>'username','label'=>_('Username:'),'type'=>'text'],
['name'=>'password','label'=>_('Password:'),'type'=>'password']
];
echo $this->form('form','','post',$inputs,_('Log in'));
?>

<?=_('Don\'t have an account?')?> <a href="/User/register"><?=_('Register.')?></a>
<?php
$this->view('shared/footer');
?>