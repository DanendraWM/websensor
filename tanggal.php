<?php
include 'koneksi.php';

$sql = mysqli_query($koneksi, 'SELECT * FROM sensor ORDER BY id DESC');
$data = mysqli_fetch_array($sql);
$suhu = $data['suhu'];
$kelembapan = $data['kelembapan'];

setlocale(LC_ALL, 'IND');
date_default_timezone_set('Asia/Jakarta');
echo strftime("%T <br> <h4>%A, %d %B %Y</h4>");
$tanggal = date('d-m-Y');
$waktu = date('H:i:s');
$token = '5213051418:AAFvGFJEwPC0zfP8mJC1QmiMRF-qJqv9Ew8';
$pesan = '====DAILY REPORT====' . PHP_EOL . PHP_EOL . 'tanggal ' . $tanggal . PHP_EOL . 'jam ' . $waktu . PHP_EOL . 'suhu = ' . $suhu . ' C' . PHP_EOL . 'kelembapan = ' . $kelembapan . ' %';
$data = [
    'chat_id' => '1367665223',
    'text' => $pesan,
];
// for ($i = 0; $i < 10; $i++) {
// }
if ($waktu == "09:00:00") {
    // echo ('jam berhasil');
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));
} elseif ($waktu == "12:00:00") {
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));
} elseif ($waktu == "15:00:00") {
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));
} elseif ($waktu == "18:00:00") {
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));
} elseif ($waktu == "21:00:00") {
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));
} elseif ($waktu == "24:00:00") {
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));
} elseif ($waktu == "03:00:00") {
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));
} elseif ($waktu == "06:00:00") {
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));
}
