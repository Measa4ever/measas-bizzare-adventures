<?php
$to = 'measa.phann@workshopschool.org';
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$message = $_POST['message']; 
$from = "From: ".$mailFrom;
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>