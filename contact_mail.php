<?php

$headers = "MIME-Version: 1.0" . "\r\n";

$name= $_POST['name'];
$email=$_POST['email'];
$text= $_POST['text'];
$message= $_POST['message'];

// header('location: contact.php');

$to = "olayinkaalabi191@gmail.com";
        $subject = "4logix Contact Page Form";
        $txt ="Name = ". $name .  "\r\n  Email = ". $email
        . "\r\n Text = ". $text.  "\r\n Message = ". $message;

        $headers .= "From: $email" . "\r\n" .
        "CC: olayinkaalabi05@gmail.com". "Reply-to:noreply@4logix.com";
        if($email!=NULL){
         mail($to,$subject,$txt,$headers);

         $msg = "<div style='color:green;'>Thank you for contacting us, we appreciate your business.</div>";
         include "./contact.php";
        }
        else{
            $errmsg = "<div style='color:red;'>Could not successfully send message</div>";
            include "./contact.php";
        }
        exit;

   
?>