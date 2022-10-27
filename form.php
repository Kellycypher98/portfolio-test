<?php
if(!empty($_POST["submit"])){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $emailSender = $_POST["emailSender"];
    $telephoneSender = $_POST["telephoneSender"];
    $service_type = $_POST["service_type"];
    $have_web = $_POST["have_web"];
    $nature = $_POST["nature"];
    $budget = $_POST["budget"];
    $toEmail= "kelvinboateng94@outlook.com";

    $mailHeaders = "First Name: " . $firstName .
    "\r\n last name: " . $lastName . 
    "\r\n email: " . $emailSender . 
    "\r\n telephone: " . $telephoneSender . 
    "\r\n service type: " . $service_type . 
    "\r\n have a website ?: " . $have_web . 
    "\r\n nature of project: " . $nature . 
     "\r\n budget: " . $budget .  "\r\n";

    if(mail($toEmail,$firstName,$lastName,$mailHeaders)){
        $message = "Your request has been sent succesfully";
    }

}
?>