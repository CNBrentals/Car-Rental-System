 <?php
$heading = "Manage Offers";
$page_title = "Manage";
$Offer = new database('offer');
$var =[
	'Selectoffer'=>$Offer,
	'addoffer'=>$Offer,
	'delete'=>$Offer
];
$content = loadTemplate('../template/adminofferTemp.php',$var);
?>