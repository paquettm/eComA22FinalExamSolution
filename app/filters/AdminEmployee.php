<?php
namespace app\filters;

#[\Attribute]
class AdminEmployee extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role']!='admin' && $_SESSION['role']!='employee'){
			header('location:/User/account?error=Your account does not have admin or employee privileges.');
			return true;
		}
		return false;
	}
}

?>