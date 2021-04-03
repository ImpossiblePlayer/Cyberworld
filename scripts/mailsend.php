<?php 
	if(isset($_POST['submit'])) { // Checks if button was used / Проверяет, была ли нажата кнопка
	    $to = "ivanpronin@gmail.com"; // Adress where emails are sent / Адрес, куда отправляются письма
	    $from = $_POST['email']; // User's adress / Адрес отправителя
		$tel = $_POST['tel']; // User's phone number / Номер телефона отправителя
	    $name = $_POST['name']; // User name / Имя отправителя
	    $subject = "Отзыв от:" . $name;
	    $message = $_POST['message']; // Connects user name & message
									  // Соединяет имя отправителя и сообщение
	    $footer = "Контакты:" . $from . ", " . $tel; // Contacts in footer / Контакты в футере
	    mail($to,$subject,$message,$footer); // Sends all info on email / Отправляет всю информацию на почту
    }
?>