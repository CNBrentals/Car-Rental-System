 <?php
$heading = "Book";
$class = '';
$Book = new database('rent');
$users = new database('users');
$Vechile = new database('Vechile');
$var =[
	'addvec'=>$Book,
	'login'=>$users,
	'vec'=>$Vechile
];
$content = loadTemplate('../template/reTemp.php',$var);
?>