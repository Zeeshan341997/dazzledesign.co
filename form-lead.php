<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $brief = $_POST["brief"];

//     // Basic validation - you should add more robust validation/sanitization
//     if (empty($name) || empty($email) || empty($brief)) {
//         die("Please fill in all required fields.");
//     }

//     // Assuming you have a valid email address to send the form data to
//     $to = "zeeshanzeegota@gmail.com";
//     $subject = "New Form Submission";
//     $headers = "From: $email";


//     // You can add more headers or configure the mail function as needed

//     // Send the email
//     $mailSuccess = mail($to, $subject, $message, $headers);

//     if ($mailSuccess) {
//         echo "<h2>Thank you for your submission, $name!</h2>";
//         echo "<p>Your message has been sent.</p>";
//     } else {
//         echo "<h2>Sorry, there was an error sending your message.</h2>";
//     }
// }
?>

<?php


if (isset($_POST['submit'])) {
  $to_email = 'zeeshanzeegota@gmail.com';
  $name = $_POST['name'];
  $from = $_POST['email'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $brief = $_POST['brief'];
  $headers = "From: $from";

  // Message body
  $message = "Name: $name\r\n";
  $message .= "Email: $email\r\n";
  $message .= "Phone: $phone\r\n";
  $message .= "Brief: $brief\r\n";

  // Sending the email
  $mailSuccess = mail($to_email, "Brief Submission", $message, $headers);
  
  if ($mailSuccess) {
    $msg = "<h2>Thank you for your submission, $name!</h2>";
  
    echo "<script>
      window.open('/thank-you/?thanksMsg=$msg','_self')
      </script>";
  } else {
    $msg = '<h2 class="text-center">Sorry your submission failed!</h2>';
    echo "<script>
    window.open('/thank-you/?thanksMsg=$msg','_self')
    </script>";
  }
}

?>