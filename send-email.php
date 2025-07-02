<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "cholakachamba1@gmail.com"; // Your receiving email
    $subject = "New Message from Website";
      $name = $_POST['name'];
        $email = $_POST['email'];
          $message = $_POST['message'];
            $headers = "From: $email";

              if (mail($to, $subject, $message, $headers)) {
                  echo "Email sent successfully!";
                    } else {
                        echo "Failed to send email.";
                          }
                          }
                          ?>