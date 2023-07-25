<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate form data (you can add more validation as per your requirements)

    // Send email
    $to = "benkhlifaabdellah48.com"; // Replace this with your email address
    $subject = "New message from website form";
    $body = "Email: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
