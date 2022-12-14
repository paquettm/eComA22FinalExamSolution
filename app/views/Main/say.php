<?php
$this->view('shared/header', 'Say it again');
?>
<?=_('I would like to say the following:')?>
<?php
echo $data;
?>
<a href='/Main/index'><?=_('go to Main/index')?></a>

<?php
$this->view('shared/footer');
?>