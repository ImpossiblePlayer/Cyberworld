<?php 
	if(isset($_POST['submit'])){
	    $to = "ivanpronin1379@gmail.com"; // This is Email address where email comes / Это адрес получателя
	    $from = $_POST['email']; // This is the sender's Email address / Это адрес отправителя
	    $name = $_POST['name'];
	    $subject = "Form submission";
	    $message = $name . " отправил:" . "\n\n" . $_POST['message'];
	    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

	    $headers = "From: " . $from . ",\n" . $tel;
	    mail($fro,$subject,$message,$headers); // Sends message on Email / Отправляет письмо на Email
	    echo "Письмо отправлено. Спасибо,  " . $name . ", Вам скоро ответят.";
	    }
?>