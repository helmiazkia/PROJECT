<?php

function register_user($email, $password){
   global $link;
   $query = "INSERT INTO user (email, password)
    VALUES ('$email', '$password') ";
    if (mysqli_query($link, $query)){
        echo 'berhasil';
    }else {
        echo 'gagal';
    }
}