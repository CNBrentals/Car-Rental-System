 <?php
$heading = "Book";
$class = '';
$Vechiles = new database('rent');
$SelectedVechiles = new database('vechile');
$SelectedUser = new database('users');
$Book = new database('rent');
$var =[
	'addvec'=>$Vechiles,
	'SelectVechile'=>$SelectedVechiles,
	'add'=>$SelectedUser,
	'selectbook'=>$Book
];
$content = loadTemplate('../template/rentTemp.php',$var);
?>