<?php
$heading = "Complete";
$class = '';
$users = new database('users');
$var =[
	'user'=>$users,
	'updateusers'=>$users
];
$content = loadTemplate('../template/comregTemp.php',$var);
?>