<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi1.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$nama = $_POST['nama'];
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$denda = $_POST['denda'];

// perintah SQL
$query="INSERT INTO pengembalian VALUES ('','$nama' ,' $kode_buku','$judul_buku','$tanggal_pengembalian','$denda') " ;

$hasil=mysql_query($query);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= ../listkiri/pengembalian.php'/>  ";
} else { echo "Data gagal disimpan
	<meta http-equiv='refresh' content='2; url= ../listkiri/pengembalian.php'/> ";
}
?>


