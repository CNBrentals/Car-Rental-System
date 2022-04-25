 <?php
$heading = "Users";
$class = '';
$users = new database('users');
$var =[
	'addusers'=>$users,
	'user'=>$users,
	'login'=>$users
];
$content = loadTemplate('../template/registerusersTemp.php',$var);
?>