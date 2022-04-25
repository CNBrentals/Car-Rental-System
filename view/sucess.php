 <?php
$heading = "Sucess";
$class = '';
$users = new database('users');
$var =[
	'login'=>$users
];
$content = loadTemplate('../template/sucessTemp.php',$var);
?>
