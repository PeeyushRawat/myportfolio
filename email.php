<?php
//get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = "rawat.peeyush2000@gmail.com";

$txt = "Name = ".$name."\r\nEmail = ".$email."\r\nMessage = ".$message;

$headers = "From: noreply";
if($email!=NULL){
	mail($to, $subject, $message,$headers);
}