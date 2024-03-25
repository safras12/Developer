<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = 'safrasmohamed610@gmail.com'; // Change this to your email address
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n$message";
    
    // Send email
    if(mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Your message has been sent. Thank you!');</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your message. Please try again later.');</script>";
    }
}
?>
