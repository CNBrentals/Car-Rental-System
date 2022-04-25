 <?php
$heading = "Manage Customers";
$page_title = "Manage";
$users = new database('users');
$var =[
	'SelectUsers'=>$users,
	'$Offer'=>$users
];
$content = loadTemplate('../template/oldcustomerTemp.php',$var);
?>