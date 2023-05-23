<?php
// Include file koneksi ke database
include 'koneksi.php';

// Mengambil data dari form registrasi
$user_id = $_POST["user_id"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$telp = $_POST["telp"];
$password = $_POST["password"];
$user_role = $_POST["user_role"];

// Query untuk menambahkan data user ke database
$query = "INSERT INTO user (user_id, nama, email, telp, password, user_role)
          VALUES ('$user_id', '$nama', '$email', '$telp', '$password', '$user_role')";

if(mysqli_query($conn, $query)) {
    // Jika query berhasil dijalankan, redirect ke halaman login
    header("Location: login.php");
    exit;
} else {
    // Jika query gagal dijalankan, tampilkan pesan error
    echo "Pendaftaran gagal: " . mysqli_error($conn);
}
