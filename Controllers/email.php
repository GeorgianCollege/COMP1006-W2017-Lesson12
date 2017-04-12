<?php

function ProcessEmail($fullName, $emailAddress, $contactNumber, $message) {
    // If you are using Composer (recommended)
    require 'vendor/autoload.php';

// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");

    $from = new SendGrid\Email(null, $emailAddress);
    $subject = "Email from Contact Form";
    $to = new SendGrid\Email(null, "tom.tsiliopoulos@gmail.com");

    $message .= "\n \nFull Name:" . $fullName . "\nContact Number: " . $contactNumber;

    $content = new SendGrid\Content("text/plain", $message);
    $mail = new SendGrid\Mail($from, $subject, $to, $content);

    //$apiKey = $_ENV["SENDGRID_API"];
    $sg = new \SendGrid("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");
    //$sg = new \SendGrid($apiKey);

    // send the mail
    $response = $sg->client->mail()->send()->post($mail);


    return $response->statusCode();
}


?>