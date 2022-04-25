 <?php
$heading = "Login";
$class = '';
$users = new database('users');
$var =[
	'addusers'=>$users,
	'login'=>$users
];
$content = loadTemplate('../template/loginTemp.php',$var);
?>