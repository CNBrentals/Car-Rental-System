 <?php
$heading = "Our Services";
$class = '';
$Vechiles = new database('vechile');
$Book = new database('rent');
$var =[
	'SelectVechile'=>$Vechiles,
	'resultt'=>$Vechiles,
	'selectbook'=>$Book
];
$content = loadTemplate('../template/servicesTemp.php',$var);
?>
