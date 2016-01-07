<?php
$errors = '';
$myemail = 'frankysaxena@gmail.com';
if(empty($_POST['name'])  ||
   empty($_POST['email']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$findus = $_POST['find-us'];
$newsletter = $_POST['newsletter'];
if ($newsletter != 'Yes') {
    $newsletter = 'No';
}

if( empty($errors))
{
    $to = $myemail;
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. ".
    " Here are the details:\n Name: $name \n Email: $email_address \n Message: $message \n Find us: $findus \n Newsletter: $newsletter"

    ;


    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";

    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
}
?>
