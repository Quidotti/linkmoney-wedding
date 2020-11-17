<?php
// include("index.php");
?>

<?php

if (isset($_POST['submit'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $event = $_POST['event'];
    $guest = $_POST['guest'];
    $message = $_POST['message'];

    $myMail = "bobzeelinkmoney@yahoo.com";
    $header = "From: " . $email;
    $message2 = "You have receipt a message via your wedding website from"
        . $name . ".\n\n" . $event . $guest . $message;
    // recived message function
    mail($myMail, $header, $message2);

    header("Location: index.php?mailsentsuccessful");
    if (mail($myMail, $header, $message2)) {
        echo "Sent sucessfuly to " . $myMail;   // on TRUE
    } else {
        echo "Not sent";
    }
}
?>