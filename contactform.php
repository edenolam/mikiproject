<?php
if (isset($_POST['submit'])) {
//    $name = $_POST['name'];
//    $subject = $_POST['subject'];
//    $mailFrom = $_POST['mail'];
//    $message = $_POST['message'];
//
//    $mailTo = "julienbasquin.jb@gmail.com";
//    $headers = "From: ".$mailFrom;
//    $txt = "you have received an email from ".$name.".\n\n".$message;
//
//    mail($mailTo, $subject, $txt, $headers);
//    header("Location: index.php?mailsend");

    // the message
    $msg = "First line of text\nSecond line of text";

// send email
    mail("julienbasquin.jb@gmail.com","My subject",$msg);
}