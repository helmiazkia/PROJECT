<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="addBrg.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <title>Input brg</title>
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
          <a class="nav-link active" aria-current="page" href="addBrg.php">Tambah Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logut</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</head>
    <body>
        <h1>Input barang</h1>
        <form action="insBrg.php" method='post' enctype="multipart/form-data">
            ID  <input type='text' name='tid'> <br/>
            nama barang <input type='text' name='tnama'> <br/>
            Harga  <input type='text' name='thrg'> <br/>
            Jml Stok  <input type='text' name='stok'> <br/>
            Keterangan  <input type='text' name='tket'> <br/>
            Foto  <input type='file' name='foto'> <br/>
            <input type='submit' value='Simpan'>
        </form>
    </body>
</html>