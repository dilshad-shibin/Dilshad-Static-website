<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";



$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];


$mail = new PHPMailer(true);

//Enable SMTP debugging.
// $mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp-relay.sendinblue.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "dilshadkp05@gmail.com";                 
$mail->Password = "qwTskzCF4865yDfd";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "dilshadkp05@gmail.com";
$mail->FromName = "Dilshad Shibin";

$mail->addAddress("dilshadkp05@gmail.com", "Dilshad shibin");

$mail->isHTML(true);

$mail->Subject = "Website Contact Details";
$mail->Body = "name: ".$name ."' \r\n'phone: ".$phone ."' \r\n'email: ".$email ."' \r\n'message: ".$message;
$mail->AltBody = "This is the plain text version of the email content";

try {
    echo "in try";
    $mail->send();
    header('Location:thankyou.html');
    echo "Message has been sent successfully";
    
} catch (Exception $e) {
  echo "in catch";
    header("Location:thankyou.html");
    echo "Mailer Error: " . $mail->ErrorInfo;
}