<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'discosuli@example.com'; // Ide írd be a címzett email címét
    $subject = 'Új üzenet a weboldalon keresztül';
    $body = "Név: $name\nEmail: $email\nÜzenet:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Az email sikeresen elküldve.";
    } else {
        echo "Hiba történt az email küldése során.";
    }
}
?>
