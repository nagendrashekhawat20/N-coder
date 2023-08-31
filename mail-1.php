<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "nagendra.20nov@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $messageBody = "First Name: $firstName\n"
                 . "Email: $email\n"
                 . "Phone: $phone\n"
                 . "Message:\n$message";

    $headers = "From: $email";

    if (!empty($firstName) && !empty($email) && !empty($phone)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (mail($to, $subject, $messageBody, $headers)) {
                echo "Thank you for your submission!";
            } else {
                echo "There was a problem sending the email.";
            }
        } else {
            echo "Invalid email address.";
        }
    } else {
        echo "First name, email, and phone are required fields.";
    }
}
?>
