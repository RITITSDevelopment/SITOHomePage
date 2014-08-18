<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$to = "sito@rit.edu";
	$subject = "SITO Email";

	mail($to , $subject, $message . "\n\nPhone Number: " . $phone . "\nName: " . $name, "From: " . $email);
?>