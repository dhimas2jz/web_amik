<?php

include "koneksi1.php";
?>
<!DOCTYPE HTML>
<head>
	<title> TAMBAH PEMINJAMAN </title>
	<link href ="css_submit.css" rel="stylesheet" type="text/css">
	
	
</head>
<body style = 'margin : 20px; font : 16px arial;'>
	<center>
	<p> TAMBAH PEMINJAMAN </p>
	
	<form method = 'POST' action = 'aksi_tambah.php'>
	<table border = '1' cellspacing = '1' cellpadding = '10'
	style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
	<tr>
		<td> Nama Anggota </td>
		<td> <input type = 'text' placeholder='Nama Anggota' name = 'nama' /> </td>
	  </tr>
	<tr>
		<td> Kode Buku </td>
		<td> <input type ='text' placeholder='Kode Buku' name = 'kode_buku' /> </td>
	  </tr>
	<tr>
		<td> Judul Buku </td>
		<td> <input type = 'text' placeholder='Judul Buku' name = 'judul_buku' /> </td>
	  </tr>
	<tr>
		<td> Tanggal Peminjaman </td>
		<td> <input type = 'text' placeholder='Tanggal Peminjaman' name = 'tanggal_peminjaman' /> </td>
	  </tr>
	<tr>	
		<td> Tanggal Pengembalian </td>
		<td> <input type = 'text' placeholder='Tanggal Pengembalian' name = 'tanggal_pengembalian' /> </td>
	  </tr>
	
		
	<tr>
	<td colspan = '3' align = 'center'>
	<input type = 'submit' name = 'submit' value = 'Submit'/>
	<input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
	</tr>
</table>
    <a href="../listkiri/peminjaman.php"> Kembali </a>
        </form>
</body>
</html>