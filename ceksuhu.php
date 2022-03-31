<?php
include 'koneksi.php';

$sql = mysqli_query($koneksi, 'SELECT * FROM sensor ORDER BY id DESC');
$data = mysqli_fetch_array($sql);
$suhu = $data['suhu'];
echo $suhu;
