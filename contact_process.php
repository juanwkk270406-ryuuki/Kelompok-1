<?php
include 'config.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO contact (nama, email, subject, pesan)
        VALUES ('$nama', '$email', '$subject', '$pesan')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Pesan berhasil dikirim!'); window.location='contact.html';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>