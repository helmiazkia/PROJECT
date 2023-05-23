<?php
    include "koneksi.php";
    include "uploadFoto.php";
    $id = $_POST['tid'];
    $nama = $_POST['tnama'];
    $hrg = $_POST['thrg'];
    $ket = $_POST['tket'];
    $stok = $_POST['stok'];
    
    if (upload_foto($_FILES["foto"])) {
        $foto=$_FILES["foto"]["name"];
        $sql = "insert into barang (id,nama,hrg,stok,keterangan,foto) values ('$id','$nama',$hrg,$stok,'$ket','$foto')";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("location:index.php");
        } else {
            $conn->close();
            echo "New records failed";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

?>