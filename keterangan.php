<?php
include 'koneksi.php';
$sql = mysqli_query($koneksi, 'SELECT * FROM sensor');
$data = mysqli_fetch_array($sql);
$nilai = $data['suhu'];
if ($nilai >= 20) {
    $ket = "panas";
    echo $ket;
} else {
    $ket = "Oke";
    echo $ket;
}
