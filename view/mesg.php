 <?php
$heading = "Manage Customers";
$page_title = "Manage";
$mesg = new database('inquiry');
$var =[
	'select'=>$mesg,
	'updateold'=>$mesg
];
$content = loadTemplate('../template/mesgTemp.php',$var);
?>