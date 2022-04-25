<?php
$heading = "Manage Vechiles";
$page_title = "Manage";
$Vechiles = new database('vechile');
$var =[
	'addvec'=>$Vechiles,
	'SelectVechile'=>$Vechiles,
	'image'=>$Vechiles,
	'delete'=>$Vechiles
];
$content = loadTemplate('../template/adminvechileTemp.php',$var);
?>