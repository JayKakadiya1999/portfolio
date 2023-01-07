<?php
  
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['message'];
// echo $name .' '. $email .' '. $sub .' '. $msg;

require 'phpmailer/PHPMailerAutoload.php';
require 'phpmailer/class.smtp.php';
require 'phpmailer/class.phpmailer.php';

$mail = new PHPMailer(true);
//Enable SMTP debugging.
$mail->SMTPDebug = 3; 
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name  
$mail->Host='smtp.gmail.com';
//Set TCP port to connect to
$mail->Port=587;
//Set TCP port to connect to
$mail->SMTPAuth=true;
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure='tls';

$mail->Username='jaykakadiya1999@gmail.com';
$mail->Password='vxcyfezmzmskenux';

$mail->From = "jaykakadiya1999@gmail.com";
// $mail->setfrom('jaykakadiya1999@gmail.com');

$mail->addAddress("jaykakadiya1999@gmail.com", "Recepient Name");
$mail->isHTML(true);
$mail->Subject=$sub;
// echo $mail->subject;
$mail->Body='<!DOCTYPE html><html><head><style>table,th,td{border: 1px solid black;border-collapse: collapse;}th{padding: 5px;text-align: left;width:20%;}td{padding: 5px;text-align: left;}</style></head><body><table style="width:100%"><caption>Customer Contact</caption><tr><th>Name</th><td>'.$name.'</td></tr><tr><th>Email</th><td>'.$email.'</td></tr><tr><th>Subject</th><td>'.$sub.'</td></tr><tr><th>Message</th><td>'.$msg.'</td></tr></table></body</html>';
echo $mail->send();

// if(!$mail->send()){
//     echo "Email could not be send..!";
// }
// else{
//     echo "Email has been send";
// }
echo
     "
    <script>
    alert('Sent Successfully'); 
    document.location.href='index.php';
    </script>
    ";

?>