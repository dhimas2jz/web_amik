<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PERPUSTAKAAN AMIK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #000000}
.style3 {color: #0099ff}
.style4 {color: #0066FF}
.style5 {color: #00CCFF}
.style6 {color: #D70005}
.style7 {color: #0099FF}
a:link {
	color: #000000;
}
a:hover {
	color: #FFFFFF;
}
.style10 {color: #333}
.style11 {color: #333333}
-->
</style>
</head>
<body>
<div id="container">
  <div id="banner">
    <h1 class="style1"><span class="style6">AMIK</span> <span class="style6">BOGOR</span> </h1>
  </div>
  <div id="navcontainer">
    <ul id="navlist">
      <li><a href="#"></a></li>
      <li id="active"><a id="current" href="bl_index.html">HOME |</a><a href="bl_location.html">LOCATION |</a></li>
      <li><a href="bl_about.html">ABOUT |</a></li>
      <li class="style1"><a href="bl_contact.html">CONTACT</a></li>
        <span class="style7">........ .</span>|<a href="../login/daftar.php" class="style1"style1">DAFTAR</a> | <a href="../login/login.php" class="style1"style1">LOGIN</a>
    </ul>
  </div>
  <div id="sidebar">
    <h2>Menu</h2>
    <div class="navlist">
      <ul>
        <li><a href="../listkiri1/anggota.php"><span class="style10">Lihat</span> <span class="style10">Anggota</span> </a></li>
        <li><a href="../listkiri1/peminjaman.php">Lihat Peminjaman </a></li>
        <li><a href="../listkiri1/pengembalian.php">Lihat Pengembalian</a></li>
        <li><a href="../listkiri1/pengunjung.php">Lihat Pengunjung</a></li>
      </ul>
    </div>
    <h2>Link</h2>
    <div class="navlist">
      <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">What's App </a></li>
        </ul>
    </div>
  </div>
  <div id="content">
    <h2 class="style4"><span class="style1">SELAMAT</span> <span class="style1">DATANG</span> <span class="style1">DI</span> <span class="style1">PERPUSTAKAAN</span> <span class="style1">AMIK</span> <span class="style1">BOGOR</span> </h2>
    <blockquote>
      <p class="style5">Menyediakan menu yang belum disediakan Dengan Web ini kami bisa tau apa yang belum kami tau dan bisa banyak menambah ilmu </p>
    </blockquote>
    <div>
      <p><strong>Website yang menyediakan informasi mengenai AMIK BOGOR</strong></p>
      <p><?php
//membuat koneksi ke database
include "../login/koneksi1.php";
?>
 
<center> 
MENAMPILKAN BUKU 
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='530'>  
<tr>
	<th width="95"> Kode Buku </th>
	<th width="98"> Judul Buku </th>
	<th width="107"> Pengarang </th>
	<th width="99"> Penerbit </th>
	<th width="97"> Tahun </th>
	
</tr>
 
<?php  
// Perintah untuk menampilkan data
$queri="Select * From perpus" ;  //menampikan SEMUA data dari tabel siswa

$hasil=mysql_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo "	 
		<tr>
		<td>".$data['kode_buku']."</td>
		<td>".$data['judul_buku']."</td>
		<td>".$data['pengarang']."</td>
		<td>".$data['penerbit']."</td>
		<td>".$data['tahun']."</td>
		
		</tr> 
		";
		
}

?>

</table>&nbsp;</p>
    </div>
    <p>&nbsp;</p>
  </div>
  <div id="container-foot">
    <div id="footer">
      <p align="center"><a href="#" class="style3">homepage</a> | <a href="mailto:denise@mitchinson.net" class="style3">contact</a> | &copy; 2017 | Design by <a href="http://www.amikbogor.ac.id/" class="style3"> www.amikbogor.ac.id</a> | Licensed under a <a href="http://creativecommons.org/licenses/by/3.0/" class="style3" rel="license">Creative Commons Attribution 3.0 License</a></p>
    </div>
  </div>
</div>
</body>
</html>
