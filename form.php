<?php
if(isset($_POST["firstName"]) && $_POST ["lastName"] && $_POST["emailSender"] != " "){
    if(filter_var($_POST["emailSender"], FILTER_VALIDATE_EMAIL)){

         // submit form
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $emailSender = $_POST["emailSender"];
        $telephoneSender = $_POST["telephoneSender"];
        $service_type = $_POST["service_type"];
        $have_web = $_POST["have_web"];
        $nature = $_POST["nature"];
        $budget = $_POST["budget"];

        $to = "kelvinboateng94@outlook.com";
        

        $mailHeaders = "First Name: " . $firstName .
        "\r\n last name: " . $lastName . 
        "\r\n email: " . $emailSender . 
        "\r\n telephone: " . $telephoneSender . 
        "\r\n service type: " . $service_type . 
        "\r\n have a website ?: " . $have_web . 
        "\r\n nature of project: " . $nature . 
        "\r\n budget: " . $budget .  "\r\n";

        mail($to,$firstName,$lastName,$mailHeaders);

        




    }
    
   
    

}

?>