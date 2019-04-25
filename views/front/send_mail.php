<?php
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
    
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "ghadadadou07@gmail.com";
   $mail ->Password = "ghadadadou";
   $mail ->SetFrom("ghadadadou07@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo '<script type="text/javascript">'; 
      echo 'alert("Mail not sent");'; 
       echo 'window.location.href = "contact.html";';
echo '</script>';
   }
   else
   {
      echo '<script type="text/javascript">'; 
      echo 'alert("Mail sent");'; 
       echo 'window.location.href = "contact.html";';
echo '</script>';
   }





   





   

