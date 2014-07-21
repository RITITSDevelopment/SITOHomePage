<?php

    
  // Check if the "from" input field is filled out
    $valid = false;
    
    if (strlen($_POST["name"]) > 0){
        $valid = true;
    }
    
    $name = $_POST["name"]; // sender
    $from = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $fullMessage = "Name: " . $name . "\nEmail: " . $from . "\nPhone: " . $phone . "\n\nMessage: \n" . $message;
    
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $fullMessage = wordwrap($fullMessage, 70);
    // send mail
    if ($valid == true){
        $sentResult = mail("sito@rit.edu", "SITO Contact Form Message",$fullMessage,"From: $from\n");
    }
    else{
        $sentResult = false;
    }
    
    if ($sentResult == true){
       $result = array('result' => true);
       
       echo json_encode($result);
    
    }
    else{
        
       $result = array('result' => false);
       
       echo json_encode($result); 
    }

?>