<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $receiving_email_address = 'email@outlook.fr';
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    $mail_body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($receiving_email_address, $subject, $mail_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
