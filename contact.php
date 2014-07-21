<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$to = "jaydesignsgfx@gmail.com";
	$subject = "SITO Email";

	mail("jmp1548@rit.edu", $subject, $message . "\n\nPhone Number: " . $phone . "\nName: " . $name, "From: " . $email);
?>