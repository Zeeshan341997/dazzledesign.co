<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $brief = $_POST["brief"];

    // Basic validation - you should add more robust validation/sanitization
    if (empty($name) || empty($email) || empty($brief)) {
        die("Please fill in all required fields.");
    }

    // Assuming you have a valid email address to send the form data to
    $to = "zeeshanzeegota@gmail.com";
    $subject = "New Form Submission";
    $headers = "From: $email";


    // You can add more headers or configure the mail function as needed

    // Send the email
    $mailSuccess = mail($to, $subject, $message, $headers);

    if ($mailSuccess) {
        echo "<h2>Thank you for your submission, $name!</h2>";
        echo "<p>Your message has been sent.</p>";
    } else {
        echo "<h2>Sorry, there was an error sending your message.</h2>";
    }
}
?>
