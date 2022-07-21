<?php 

$namaa = $_POST['namaa'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
$berat = $_POST['berat'];
$jarak = $_POST['jarak'];
$ongkir = 5000;
$total = $jarak * $ongkir ;

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$namaa|$nama|$alamat|$jenis|$berat|$jarak|$total\n");
fclose($fp);

echo "<a href='register.php'>Isi data</a><br>";
echo "<a href='lihat.php'>Lihat data</a><br>";

 ?>