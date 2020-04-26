


<?php

    $name=$_POST['FirstName'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];
    echo $name;

    if(empty($name) || empty($visitor_email))
    {
        echo "name or Email incorrecte ...!";
        exit;
    }

    $email_from='user1@mery.test';
    $email_subject="New form submission";
    $email_body="you have received a new message from the user $name.\n".
    "Email address: $visitor_email. \n"."Message: $message";

    $to = "user1@mery.test";
    $headers="From: $email_from \n";
    $headers .="Reply-To: $visitor_email \n";

    //send the email:
    mail($to,$email_subject,$email_body,$headers);





?>