<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "kavuluri.rohit@gmail.com";
$subject = "Mail from NuWay";

$headers = "From: ".$name."\r\n". 
"CC: ";


