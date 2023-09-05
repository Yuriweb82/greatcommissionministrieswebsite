<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $recipient_email = "shinjungtee@gmail.com";
    $subject = "New email submission from your website";
    $user_email = $_POST["user_email"];
    
    if (mail($recipient_email, $subject, $user_email)) {
        echo "Thank you for submitting your email. We will get in touch with you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    header("Location: index.html");
    exit();
}
?>