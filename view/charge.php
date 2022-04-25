<?php
$heading = "Charge";
$transaction = new database('transactions');
$var =[
	'addtransaction'=>$transaction
];
$content = loadTemplate('../template/chargeTemp.php',$var);
?>