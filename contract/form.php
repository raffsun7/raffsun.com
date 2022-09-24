<?php

if (isset($_POST['submit'])){
    $name= $_POST['name'];
    $subject= $_POST['subject'];
    $mailFrom= $_POST['email'];
    $message= $_POST['message'];

    $mailTo = "raffsun1@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".n\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Locaion: index.php?mailsend");
}