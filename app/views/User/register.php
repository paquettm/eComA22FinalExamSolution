<?php
$this->view('shared/header', _('Register account'));
?>

<?php
	if(isset($_GET['error'])){ ?>
<div class="alert alert-danger" role="alert">
  <?= $_GET['error'] ?>
</div>
<?php	}

$inputs = [
['name'=>'username', 'type'=>'text', 'label'=>_('Username:')],
['name'=>'password', 'type'=>'password', 'label'=>_('Password:')],
['name'=>'password_confirmation', 'type'=>'password', 'label'=>_('Password confirmation:')]
];
echo $this->form('form','','post',$inputs,_('Register'));
?>
<?=_('Already have an account?')?> <a href="/User/index"><?=_('Login.')?></a>
<?php
$this->doFeedback('#form');

$this->view('shared/footer');
?>