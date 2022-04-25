 <?php
$heading = "Manage Customers";
$page_title = "Manage";
$users = new database('users');
$var =[
	'SelectUsers'=>$users,
	'$Offer'=>$users,
	'updateold'=>$users,
];
$content = loadTemplate('../template/admincustomersTemp.php',$var);
?>