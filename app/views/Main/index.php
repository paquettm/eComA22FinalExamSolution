<?php
$this->view('shared/header', 'Main');
?>
<p><?=_('This is the index of the Main controller.')?></p>

<ul>
<li><a href='/Food'><?=_('foods example')?></a></li>
<li><a href='/Vet/index'><?=_('Veterinarian Clinic example')?></a></li>
<li><a href='/User/account'><?=_('User Account')?></a></li>
<li><a href='?lang=fr_CA'>Français</a></li>
<li><a href='?lang=en'>English</a></li>

</ul>

<?php
$this->view('shared/footer');
?>