<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Form verilerini al
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Hedef e-posta adresi
    $to = "217087020@toros.edu.tr";  // Burada belirttiğiniz e-posta adresi
    $body = "Ad: $name\nE-posta: $email\nKonu: $subject\nMesaj:\n$message";
    $headers = "From: $email";

    // Mail gönderimi
    if (mail($to, $subject, $body, $headers)) {
        echo "Mesajınız başarıyla gönderildi!";
    } else {
        echo "Mesaj gönderilirken bir hata oluştu. Lütfen tekrar deneyin.";
    }
} else {
    echo "Form verileri alınamadı.";
}
?>
