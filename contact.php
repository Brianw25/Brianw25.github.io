<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['Subject'];
    $mailFrom= $_POST['_replyto'];
    $message = $_POST['message'];

    $mailTo = "brian.whitney98@icloud.com";
    $headers = "From: ".$mailFrom;
    $txt = "you have received an e-mail from ".$name.".\n\n".$message;


    mail($mailTo,$subject,$txt,$headers);
    header("Location: index.html?mailsend");
}