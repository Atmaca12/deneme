<?php
 include 'connect.php';

if (isset($_POST['insert'])) {


	$save=$db->prepare("INSERT INTO settings set

		settings_name=:settings_name,
		settings_mail=:settings_mail
		");
	$insert=$save->execute(array(

	'settings_name'=>$_POST['settings_name'],
	'settings_mail'=>$_POST['settings_mail']
	
	));
if ($insert) {
	echo "basarılı";
}
	else{echo "basarısı<";}
}


 ?>