<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi1.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$nama = $_POST['nama'];
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];

// perintah SQL
$query="INSERT INTO peminjaman VALUES ('','$nama' ,' $kode_buku','$judul_buku','$tanggal_peminjaman','$tanggal_pengembalian') " ;

$hasil=mysql_query($query);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url=../listkiri/peminjaman.php'/>  ";
} else { echo "Data gagal disimpan
	<meta http-equiv='refresh' content='2; url=../listkiri/peminjaman.php'/> ";
}
?>


