<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi1.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$nama_pengunjung = $_POST['nama_pengunjung'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];
$buku_yang_dilihat = $_POST['buku_yang_dilihat'];
$email = $_POST['email'];

// perintah SQL
$query="INSERT INTO pengunjung VALUES ('','$nama_pengunjung' ,' $tanggal','$status','$buku_yang_dilihat','$email') " ;

$hasil=mysql_query($query);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= ../listkiri/pengunjung.php'/>  ";
} else { echo "Data gagal disimpan
	<meta http-equiv='refresh' content='2; url= ../listkiri/pengunjung.php'/> ";
}
?>


