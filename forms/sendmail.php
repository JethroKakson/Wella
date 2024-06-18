<!-- forms/sendmail.php -->
<?php
  // Set the recipient email address
  $to = 'jethrokakson@gmail.com';

  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Create the email headers
    $headers = "From: $email\r\n";
    $headers.= "Reply-To: $email\r\n";

    // Create the email message
    $msg = "Name: $name\n";
    $msg.= "Email: $email\n";
    $msg.= "Subject: $subject\n";
    $msg.= "Message: $message";

    // Send the email
    mail($to, $subject, $msg, $headers);

    // Display a success message
    // echo "Message sent successfully!";
  }
?>