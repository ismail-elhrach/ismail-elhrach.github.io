<?php
// Set your email address where you want to receive the messages
$toEmail = "benkhlifaabdellah48@gmail.com";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // Validate the data (you can add more validation if needed)
    if empty($email) || empty($feedback)) {
        http_response_code(400);
        echo "Please fill in all the required fields.";
        exit;
    }

    // Prepare the email message
    $subject = "New message from your website form";
    $headers = "From: " . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";


    $emailContent .= "<p><strong>Email:</strong> $email</p>";
    $emailContent .= "<p><strong>Message:</strong><br>$message</p>";

    // Send the email
    if (mail($toEmail, $subject, $emailContent, $headers)) {
        http_response_code(200);
        echo "Message sent successfully!";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    http_response_code(403);
    echo "Access Forbidden.";
}
?>
