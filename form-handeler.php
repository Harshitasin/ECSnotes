<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$email_form = 'harshitasin.github.io/ECSnotes/';
$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
                "Message: $message .\n";
$to: 'harshitabiet2019@gmail.com';
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_body,$headers);
header("Location: contact.html");
?>