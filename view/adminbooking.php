 <?php
$heading = "Manage Bookings";
$page_title = "Manage";
$Book = new database('rent');
$vec = new database('vechile');
$var =[
	'Selectbookings'=>$Book,
	'SelectVec'=>$vec,
	'delete'=>$Book,
	'deletebooking'=>$Book
];
$content = loadTemplate('../template/adminbookingsTemp.php',$var);
?>