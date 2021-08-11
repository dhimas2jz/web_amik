<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi1.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

// perintah SQL
$query="INSERT INTO perpus VALUES ('','$kode_buku' ,' $judul_buku','$pengarang','$penerbit','$tahun') " ;

$hasil=mysql_query($query);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
} else { echo "Data gagal disimpan
	<meta http-equiv='refresh' content='2; url= tambah.php'/> ";
}
?>


