<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama            = $_POST['nama'];
$hadir           = $_POST['hadir'];
$tamu        = $_POST['tamu'];
$ucapan  = $_POST['ucapan'];
// query SQL untuk insert data
$query="INSERT INTO reservasi SET nama='$nama',hadir='$hadir',tamu='$tamu',ucapan='$ucapan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:". $_SERVER['HTTP_REFERER']);
?>