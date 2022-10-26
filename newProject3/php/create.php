<?php

require_once 'connect.php';


$rout = $_POST['route'];

$eventId = 001;
$eventDate = $_POST['time'];
$ticketAdultPrice = price();
$ticketAdultQuantity = $_POST['ticket'];
$equalPrice = $_POST['ticket'] * $ticketAdultPrice;





?>