<?php
    $name = $_POST['name'];
     $visitor_email = $_POST['email'];
     $message = $_POST['message'];

    $email_from = "dhurbabrl98@gmail.com";
    $email_subject = "New Form Submission";
    $email_body = "User Name:$name.\n".
                    "User E-mail:$visitor_email.\n".
                       "user Message:$message.\n";
    $to = "dhurbabaralam@gmail.com";
    $headers = "From:  $email_from\r\n";
     $headers .= "Reply To:  $visitor_email\r\n";
     
     mail("$to,$email_subject,$email_body,$headers");
     
    header("Location: contact.html");
    

?>