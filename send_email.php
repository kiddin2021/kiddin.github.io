<?php
// Ambil data dari form kontak
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Atur penerima email
$to = 'admweb365@gmail.com';

// Atur subjek dan isi email
$subject = 'Pesan dari ' . $name;
$body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";

// Atur header email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Kirim email
if (mail($to, $subject, $body, $headers)) {
    echo 'Pesan anda telah berhasil dikirim.';
} else {
    echo 'Terjadi kesalahan saat mengirim pesan.';
}
