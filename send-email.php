<?php

    // Define error variables
    $errName = $errEmail = $errMessage = '';

    // check if form is submitted
    if(isset($_POST["submit"])){

    // assign POST variables and sanitize
    $name = filter_var($_POST["name"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Define email
    $to = 'contact@damionvoshall.com';

    // Create subject
    $subject = "$name submitted a form from your portfolio site.";

    // Create Body
    $body = "From: $name\n E-mail: $email\n Message:\n $message";

    // Create Headers
    $headers = "From: $email";

    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and validate
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address.';
    }

    // Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message.';
    }

    // If no errors, send email
    if (!$errName && !$errEmail && !$errMessage) {
        if (mail ($to, $subject, $body, $headers)) {
            $result='<div class="alert-success">Thank You for reaching out! You will receive a reply shortly</div>';
            header('Location: /');
            exit();
        } else {
            $result='<div class="alert-fail">Sorry, there was an issue processing your request. Please try again later.</div>';
            header('Location: /');
            exit();
        }
    }
    }
