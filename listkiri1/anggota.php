<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PERPUSTAKAAN AMIK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../admin/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #000000}
.style3 {color: #0099ff}
.style4 {color: #0066FF}
.style5 {color: #00CCFF}
.style9 {color: #D70005}
.style10 {color: #0099FF}
-->
</style>
</head>
<body>
<div id="container">
  <div id="banner">
    <h1 class="style1"><span class="style9">AMIK</span> <span class="style9">BOGOR</span> </h1>
  </div>
  <div id="navcontainer">
    <ul id="navlist">
      <li><a href="#"></a></li>
      <a href="../user/bl_index.php"><span class="style1">HOME</span>
	  <span class="style1">|</span>
	  </li></a>
      <a href="../user/bl_location.html"><span class="style1">LOCATION</span> <span class="style1">|</span>
      </li></a>
      <a href="../user/bl_about.html"><span class="style1">ABOUT</span>
      </li></a> |
	  <a href="../user/bl_contact.html"><span class="style1">CONTACT</span>
	  </li></a>
    |
      <span class="style10">........ .</span>|<a href="../login/daftar.php" class="style1"style1">DAFTAR</a> | <a href="../login/login.php" class="style1"style1">LOGIN</a>
	</ul>
  </div>
  <div id="sidebar">
    <h2>Menu</h2>
    <div class="navlist">
      <ul>
        <li><a href="anggota.php"><span class="style9">Lihat</span> <span class="style9">Anggota</span> </a></li>
        <li><a href="peminjaman.php">Lihat Peminjaman </a></li>
        <li><a href="pengembalian.php">Lihat Pengembalian</a></li>
        <li><a href="pengunjung.php">Lihat Pengunjung </a></li>
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
      <p>
	  <?php
error_reporting(0);
//membuat koneksi ke database
include "../db_anggota/koneksi1.php";
?>
        <br>
      MENAMPILKAN ANGGOTA YANG TELAH DI INPUT
      <table Width='532'  border='1' align="center" >  
<tr>
	<th width="28"> NO </th>
	<th width="88"> Nama Anggota </th>
	<th width="87">Tanggal Lahir </th>
	<th width="97">Jenis Kelamin </th>
	<th width="98">Alamat</th>
	<th width="94">Email</th>
	
</tr>
 
<?php  
// Perintah untuk menampilkan data
$queri="Select * From anggota" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// nilai awal variabel untuk no urut
$i = 1;

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo "	 
		<tr>
		<td><center>".$i."</center></td> 
		<td>".$data['nama_anggota']."</td>
		<td>".$data['tanggal_lahir']."</td>
		<td>".$data['jenis_kelamin']."</td>
		<td>".$data['alamat']."</td>
		<td>".$data['email']."</td>
		
		</tr> 
		";
	$i++;	
}

?>

</table>

<p>
  <!-- /////////////////////////////tombol untuk menambah data//////////////////////////////////-->
</p>
<p>&nbsp; </p>
<p>&nbsp;</p>
      <p>- </p>
      <p>&nbsp;</p>
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
