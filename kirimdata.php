<?php
include 'koneksi.php';

$suhu = $_GET['suhu'];
$kelembapan = $_GET['kelembapan'];
mysqli_query($koneksi, "UPDATE sensor SET suhu='$suhu', kelembapan='$kelembapan'");
// mysqli_query($koneksi, "ALTER TABLE sensor AUTO_INCREMENT=1");
// mysqli_query($koneksi, "INSERT INTO sensor(suhu,kelembapan)VALUES('$suhu','$kelembapan')");
