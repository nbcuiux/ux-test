<?php

      $name = $_POST['name'];
      $email = $_POST['email'];
      $url = $_POST['url'];
      $from = 'UX Design Test';
      $to = 'william.rajwan@nbcuni.com, Mina.Azimov@nbcuni.com, Joheun.Lee@nbcuni.com, amiel.zwier@nbcuni.com';
      $subject = 'UX Test Submission';

      $body = "From: $name\n E-Mail: $email\n URL: $url\n Message:\n $message";

      // Check if name has been entered
      if (!$_POST['name']) {
          $errName = 'Please enter your name';
      }

      // Check if email has been entered and is valid
      if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $errEmail = 'Please enter a valid email address';
      }

      //Check if message has been entered
      if (!$_POST['url']) {
          $errMessage = 'Please enter your message';
      }

     // If there are no errors, send the email
     if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail ($to, $subject, $body, $from)) {
            echo "success";
        } else {
            echo "fail";
        }
     }
     else {
       echo "fail";
     }
?>