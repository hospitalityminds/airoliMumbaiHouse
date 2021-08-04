<?php

$to = 'info@hotelgodwin.in'; //<-----Put Your email address here.
$name = $email = $message = "";

if (!empty($_POST['name']) && !empty($_POST['email'])) {


    $name = $_POST['name'];    
    $emailid = $_POST['email'];
    $message = $_POST['message'];


    $subject = "Website Visitor: From Hotel Godwin $name";
    $message = "You have received a new message. " .
            " Here are the details:\n Name: $name \n Email: $emailid  \n message: $message";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    //$headers .= 'From: Tripgyani Website <website@hospitalityminds>' . "\r\n";
    $headers .= "From: ".$name." <".$emailid."> \r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


    mail($to, $subject, $message, $headers);

    header('refresh:3; Location: http://www.hotelgodwin.in');

    echo "Thank you. We will contact you shortly.";
} else {
    echo "Please enter your Name and Email ID properly";
}
?> 

