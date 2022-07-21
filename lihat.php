<?php 

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama Pengirim          </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Nama Penerima          </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Alamat Penerima        </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Barang yang dikirim    </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Berat Barang           </td><td>: $pisah[4] kg </td></tr>";
    echo "<tr><td>Jarak Pengiriman       </td><td>: $pisah[5] km </td></tr>";
    echo "<tr><td>Total biaya            </td><td>: $pisah[6]</td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='register.php'> Isi data </a>";

?>