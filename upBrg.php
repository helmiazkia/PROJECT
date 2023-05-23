<?php
    include "koneksi.php";
    include "uploadFoto.php";
$id=$_POST['tid'];
$nama=$_POST['tnama'];
$hrg=$_POST['thrg'];
$ket=$_POST['tket'];
$stok=$_POST['stok'];
$foto_lama=$_POST['foto_lama'];
$qry=true;
$flagFoto=true;
if(isset($_POST['ubah_foto'])){
    if(upload_foto($_FILES["foto"])){
        $foto=$_FILES["foto"]["name"];
        $sql= "upadate barang set nama='$nama',hrg='$hrg',stok='$stok',keterangan='$ket',foto='$foto' where id='$id'";
    }else{
        $qry=false;
        echo "foto gagal diupload";}
    }else{
        $sql= "update barang set nama='$nama',hrg='$hrg',stok='$stok',keterangan='$ket' where id='$id'";
        $flagFoto=false;
    }
    if($qry==true){
        if ($conn->query($sql)===TRUE){
            if(is_file("img/".$foto_lama)&&($flagFoto==true))
            unlink("img/".$foto_lama);
            $conn->close();
            header("location:index.php");
        }else{
                $conn->close();
                echo "New rocords failed";}
        }
?>