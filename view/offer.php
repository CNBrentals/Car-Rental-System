 <?php
$heading = "Offer";
$class = '';
$Offer = new database('offer');
$Insert = new database('inquiry');
$var =[
	'Selectoffer'=>$Offer,
	'addinquiry'=>$Insert
];
$content = loadTemplate('../template/offerTemp.php',$var);
?>