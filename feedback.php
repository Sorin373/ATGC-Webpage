<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $to = 'sorin.andrei.tudose@gmail.com';
    $subject = 'Feedback from '.$name;
    $body = "From: $name <$email>\n\nFeedback:\n$feedback";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
	
    if (mail($to, $subject, $body, $headers, $params)) {
        echo 'Thank you for your feedback!';
    } else {
        echo 'An error occurred while sending the email.';
    }
}
?>