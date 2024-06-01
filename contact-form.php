<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate input
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Send email (for demonstration, you should configure your email settings properly)
        $to = "leilaalemtz11@gmail.com"; // Change this to your email address
        $subject = "Contact Form Submission";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for contacting us. We will get back to you shortly.";
        } else {
            echo "Sorry, something went wrong. Please try again later.";
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>
