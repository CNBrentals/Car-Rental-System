 <?php
$heading = "Users";
$class = '';
$users = new database('users');
$var =[
	'update'=>$users,
	'login'=>$users
];
$content = loadTemplate('../template/resetTemp.php',$var);
?>