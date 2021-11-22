<?php
$lokasi_file = $FILES['fupload']['tmp_name'];
$nama_file = $FILES['fupload'['name'];
$deskripsi = $_POST['deskripsi'];

$direktori = "c:/wamp/www/NIM/$nama_file";

if(move_uploaded_file($lokasi_file,$direktori))
{
    echo"Nama File : <b>$nama_file<b>berhasil di upload<br>";
    echo"Deskripsi File:<br>$deskripsi";
}
else{
    echo"File gagal di upload";
}
?>