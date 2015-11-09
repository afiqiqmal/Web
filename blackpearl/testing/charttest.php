<?php
include "smsGateway.php";
$smsGateway = new SmsGateway('afiqhitman@gmail.com', 'qwerty1993');

$page = 1;

$device = $smsGateway->getMessages($page);

print_r($device)
?>