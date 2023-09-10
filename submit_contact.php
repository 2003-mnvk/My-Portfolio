<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Send email (you can use a library like PHPMailer)
    $to = "your.email@example.com"; // Replace with your email
    $subject = "Contact Form Submission";
    $headers = "From: $email";
    $mailBody = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    mail($to, $subject, $mailBody, $headers);
    
    // Redirect back to the contact page with a success message
    header("Location: Contact.html?success=true");
    exit;
}
?>
