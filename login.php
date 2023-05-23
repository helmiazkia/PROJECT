<?php
session_start();
require 'koneksi.php';

if (isset($_POST['submit'])) {
    

$email = $_POST["email"];
$password = $_POST["password"];

$query_sql ="SELECT * FROM user
            WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['user_role'] = $row['user_role'];
    header ("Location: index.php");

}else{
    echo '<script type="text/javascript">alert("email atau sandisalah askods");</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Login account</title>
  </head>
  <body>
   <div class="container">
    <form class="form-container" action="login.php"  method="post">
        <h3 class="textjudul mb-5 text-center">Masuk</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label textform">E-mail</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword">
        </div>
        <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary textform" name="submit">Login</button>
        </div>
        <div>
            <span class="textform">Belum punya akun? Daftar <a href="registrasi.html" class="textform">Daftar</a></span>
        </div>
      </form>
      </form>
   </div>
   
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>