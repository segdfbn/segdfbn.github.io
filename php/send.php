<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "eee@hh";
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = "Email de contact: $email";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);
    echo "Message envoyé avec succès !";
}
?>