<?php

require '../PHPMailerAutoload.php';
$mail = new PHPMailer; // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "afiqhitman@gmail.com"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "afiqhitman@gmail.com";  // GMAIL username
  $mail->Password   = "cham1993";            // GMAIL password
  $mail->AddReplyTo('no-reply@MHIPHPos.com', 'PHPRetail Mailer');
  $mail->AddAddress('afiqhitman@gmail.com', 'Nurul Shafika');
  $mail->SetFrom('no-reply@MHIPHPos.com', 'PHPRetail Mailer');
  $mail->Subject = 'Sales Reciept';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  echo $mail->MsgHTML("<table border='1'><tr><th>Testing</th></tr><tr><td>Working!</td></tr></table>");
  //$mail->AddAttachment('images/phpmailer.gif');      // attachment
  //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  //$mail->Send();
  echo "Message Sent OK<p></p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
    

?>