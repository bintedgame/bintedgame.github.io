<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $feedback = test_input($_POST["feedback"]);

  $to = "bintedourple@gmail.com";
  $subject = "Binted Bug Report";
  $message = "Name: $name\nEmail: $email\nFeedback:\n$feedback";
  $headers = "From: bintedourple@gmail.com\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo "<p>Thank you we will look into this soon!</p>";
  } else {
    echo
