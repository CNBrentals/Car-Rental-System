 <?php
$heading = "Profile";
$class = '';
$users = new database('users');
$book = new database('rent');
$var =[
	'selectuser'=>$users,
	'passupdate'=>$users,
	'edituser'=>$users,
	'user'=>$users,
	'select'=>$book,
	'delete'=>$book
];
$content = loadTemplate('../template/profileTemp.php',$var);
?>