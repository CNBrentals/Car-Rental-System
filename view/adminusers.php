 <?php
$heading = "Manage Admin Uers";
$page_title = "Manage";
$users = new database('users');
$var =[
	'addusers'=>$users,
	'user'=>$users,
	'SelectUsers'=>$users,
	'delete'=>$users
];
$content = loadTemplate('../template/adminuserTemp.php',$var);
?>