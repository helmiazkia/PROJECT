<?php
session_start();
    include "koneksi.php";
    if (!isset($_SESSION['nama'])) {
        header("Location:login.php");
    }
    if ($_SESSION['user_role'] == "a") {
        include 'admin1.php';
    }else if ($_SESSION['user_role']=="u") {
        include 'user1.php';
    }

?>