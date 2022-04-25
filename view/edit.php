 <?php
$heading = "Update";
$page_title = "Update";
$Vechiles = new database('vechile');
$var =[
	'editvec'=>$Vechiles,
	'selectvec'=>$Vechiles,
	'image'=>$Vechiles
];
$content = loadTemplate('../template/editTemp.php',$var);
?>