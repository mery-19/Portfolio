<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send success</title>
</head>

<style>
div{
    background-color: rgba(81, 153, 255,0.8);
    height:30vh;
    width:80%;
    margin:0 auto;
    margin-top: 10vh;
    padding:20px;
    text-align:center;
    font-size:30;
    color:white;

}

</style>
<body>

<?php

    $name=$_POST['FirstName'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];

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

    $msg="Hello ".$name." your message successfuly send <br> thank you for visiting our website";

    echo "<div> <p>".$msg."</p></div>";

?>

</body>
</html>

