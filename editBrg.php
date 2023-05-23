<?php
    include "koneksi.php";
    $id=$_GET['id'];
    $sql="select * from barang where id='id'";
    $hasil=$conn->query($sql);
    while ($row=$hasil->fetch_assoc()) {
        $nama=$row['nama'];
        $hrg=$row['hrg'];
        $stok=$row['stok'];
        $keterangan=$row['keterangan'];
        $foto=$row['foto'];
    }
?>
<html>
    <head></head>
    <body>
        <h1>Edit Data Barang</h1>
        <form action="updBrg.php" method='post' enctype='multipart/form-data'>
            ID = <input type='text' name='tid' value="<?=$id;?>" readonly> <br/>
            nama barang = <input type='text' name='tnama' value="<?=$nama;?>" readonly> <br/>
            Harga = <input type='text' name='thrg' value="<?=$hrg;?>" readonly> <br/>
            Jml Stok = <input type='text' name='stok' value="<?=$stok;?>" readonly> <br/>
            Keterangan = <input type='text' name='tket' value="<?=$keterangan;?>" readonly> <br/>
            Foto = <input type='file' name='foto'> <br/>
            <input type='hidden' name='foto_lama' value="<?=$foto;?>">
            <img src="img/<?php echo $foto; ?>" width="150px" height="120px" /></br>
            <input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto <br>

            <input type="submit" value='Update'>
        </form>
    </body>
</html>