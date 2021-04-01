<?php 
if(isset($_POST['submit'])){
    $to = "ivanpronin@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
	$tel = $_POST['tel'];
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " (" . $tel . ") " . " написал:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    }
?>