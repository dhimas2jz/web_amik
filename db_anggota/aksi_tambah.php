<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi1.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$nama_anggota = $_POST['nama_anggota'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

// perintah SQL
$query="INSERT INTO anggota VALUES ('','$nama_anggota' ,' $tanggal_lahir','$jenis_kelamin','$alamat','$email') " ;

$hasil=mysql_query($query);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= ../listkiri/anggota.php'/>  ";
} else { echo "Data gagal disimpan
	<meta http-equiv='refresh' content='2; url= ../listkiri/anggota.php'/> ";
}
?>


