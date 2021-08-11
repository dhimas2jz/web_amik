<?php
error_reporting(0);
//membuat koneksi ke database
include "koneksi.php";
?>
<!DOCTYPE HTML>
<head>
	<title> Absen Siswa </title>
	<link href ="css_submit.css" rel="stylesheet" type="text/css">
	
	
</head>
 
<center> 
MENAMPILKAN ABSENSI SISWA 
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='600' >  
<tr>
	<th> NO </th>
	<th> Nama </th>
	<th>Hari/Tanggal</th>
	<th> Jam Masuk </th>
	<th> Jam Keluar </th>
	
</tr>
 
<?php  
// Perintah untuk menampilkan data
$queri="Select * From absen" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// nilai awal variabel untuk no urut
$i = 1;

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo "	 
		<tr>
		<td><center>".$i."</center></td> 
		<td>".$data['nama']."</td>
		<td>".$data['tanggal']."</td>
		<td>".$data['jam_masuk']."</td>
		<td>".$data['jam_keluar']."</td>
		
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
<form action='tambah.php' method='POST'>
<table >
	<tr>
	<td> <input type='submit' name='tambah' value='Tambah Absensi'> </td>	
	</tr>
</table>
</form>

