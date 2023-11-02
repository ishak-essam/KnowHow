<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient_email = "ishakessam122@gmail.com";  // Replace with the recipient's email address
    $subject = "New Contact Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // You can add additional headers or customize the message as needed.

    if (mail($recipient_email, $subject, $message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>