<!DOCTYPE html>
<html>
<head>
  <title>Daftar</title>
  <link rel="stylesheet" type="text/css" href="responsipweba.css">
  <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body background="gambar1.jpg">
  <div class="header">
      <br><strong><span class="type"></span></strong><br></div><br>
    <div class="container">
      <form action="proses.php"method="post" name="input">
        <h3><font face="algerian">DATA CUSTOMER</h3></font>
      <div class="input-control">
        <label>Nama Pengirim</label>
        <input type="text" name="namaa" id="namaa" onkeyup="validateName()">
        <span id="namaa-error"></span>
      </div>
        <div class="input-control">
        <label>Nama Penerima</label>
        <input type="text" name="nama" id="nama" onkeyup="validateName()">
        <span id="nama-error"></span>
      </div>
      <div class="input-control">
          <label>Alamat Penerima</label>
          <textarea rows="3" name="alamat" id="alamat" onkeyup="validateAlamat()" ></textarea>
          <span id="alamat-error"></span>     
      </div>
      <div class= "input-control">
          <label>Barang yang dikirim</label>
          <input type="text" name="jenis" id="jenis" onkeyup="validateJenis()">
          <span id="jenis-error"></span>
      </div>
      <div class="input-control">
        <label>Berat Barang (kg)</label>
        <input type="number" name="berat" id="berat" onkeyup="validateBerat()">
        <span id="berat-error"></span>
      </div>
      <div class="input-control">
          <label>Jarak (km)</label>
          <input type="number" name="jarak" id="jarak" onkeyup="validateJarak()" ></input>
          <span id="jarak-error"></span>      
      </div>

        <button onclick="return validateForm()" name="Input">Submit</button><button type="reset">Ulang</button>
        <span id="submit-error"></span>

      </form>
    </div>
<?php
if (isset($_POST['Input']))
{
  $namaa=$_POST['namaa'];
  echo "<center><b> Rincian</b></center><br><br>";
  echo "<center> Nama Pengirim : <font-family=StreetRuler><b>$namaa</b></font-family</center><br><br>";
}
if (isset($_POST['Input']))
{
  $nama=$_POST['nama'];
  echo "Nama Penerima : <font-family=StreetRuler><b>$nama</b></font-family<br><br><br>";
}
if (isset($_POST['Input']))
{
  $alamat=$_POST['alamat'];
  echo "Alamat Penerima : <font-family=StreetRuler><b>$alamat</b></font-family<br><br><br>";
}
if (isset($_POST['Input']))
{
  $jenis=$_POST['jenis'];
  echo "Jenis Barang : <font-family=StreetRuler><b>$jenis</b></font-family<br><br><br>";
}
if (isset($_POST['Input']))
{
  $berat=$_POST['berat'];
  echo "Berat Barang (kg) : <font-family=StreetRuler><b> $berat kg </b></font-family<br><br><br>";
}
if (isset($_POST['Input']))
{
  $jarak=$_POST['jarak'];
  echo "Jarak Pengiriman (km) : <font-family=StreetRuler><b>$jarak km</b></font-family<br><br><br>";
}
if (isset($_POST['Input']))
{
  $ongkir = 5000;
  $total = $jarak * $ongkir ;
  echo "Total biaya = <b>Rp. $total</b>";
}
?>
    <script src="responsipweb.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
</body>
</html>


