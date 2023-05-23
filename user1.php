<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin1.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <title>login</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logut</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>
<div class="container">
<?php
error_reporting(0);
if($_SESSION['user_role'] == "u" && $_SESSION['nama'] != null)
{
    $sql = "SELECT * from barang ORDER BY id";
    $hasil = $conn->query($sql);
    if ($hasil->num_rows>0) {
        echo "<table> 
                <tr>
                    <th>ID</th><th>nama</th><th>hrg</th><th>jml</th><th>ket</th><th>foto</th>
                </tr>";
        while ($row=$hasil->fetch_assoc()) {
            $teks="<tr>";
            $teks.="<td>".$row["id"]."</td>";
            $teks.="<td>".$row["nama"]."</td>";
            $teks.="<td>".$row["hrg"]."</td>";
            $teks.="<td>".$row["stok"]."</td>";
            $teks.="<td>".$row["keterangan"]."</td>";
            $teks.="<td><img src='img/".$row["foto"]."' style='width:100px;height:100px;'></img></td>";
            $teks.="</tr>";
            echo $teks;
        }
        echo "</table>";
    } else {
        echo "jml rec:0";
    }
    $conn->close();
}else{
    echo "Login dlu";
}
?>
</div>
</body>
