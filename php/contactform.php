<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "measa.phann@workshopschool.org";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}