<?php
    $email=$_POST["email"];
    $message = $_POST["message"] . "Sent this email" . "\r\n" ."Sent from this email address:" . $_POST["email"];
    mail("valentinegakunga@gmail.com", "Contact", $message);
    //header("Location: index.html");
?>