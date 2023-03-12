<?php 
$name = $_POST['name'];
$from = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "idris3097@gmail.com";
$headers = "MINE-Version: 1.0" . "\r\n";
$headers = "Content-Type: text/html; charset=utf-8" . "\r\n";
$headers = "From:<$from>\r\n";
?>