<?php
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$email =$_POST['email'];
$status =$_POST['status'];
$Komentar =$_POST['Komentar'];

echo"<head><title>MY Guestbook</head></title>";
$fp = fopen("guestbook.txt","a+");
fputs($fp,"$nama|$alamat|$email|$status|$Komentar \n");
fclose($fp);
echo"Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo"<a href=tampilan.php>isi Buku Tamu</a><br>";
echo"<a href=lihat.php>Liat Buku Tamu</a><br>";
?>