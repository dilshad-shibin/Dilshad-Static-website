<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['phone'];
$message= $_POST['message'];
$to = "dilshadshibinweb05@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name 
. "\r\n  Email = " . $email 
."\r\n  Phone = " . $number 
."\r\n Message =" . $message;
$headers = "From: noreply@dilshadshibin.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>