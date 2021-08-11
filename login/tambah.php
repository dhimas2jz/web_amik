<?php

include "koneksi1.php";
?>
<!DOCTYPE HTML>
<head>
	<title> Input Buku </title>
	<link href ="css_submit.css" rel="stylesheet" type="text/css">
	
	
</head>
<body style = 'margin : 20px; font : 16px arial;'>
	<center>
	<p> INPUT BUKU </p>
	
	<form method = 'POST' action = 'aksi_tambah.php'>
	<table border = '1' cellspacing = '1' cellpadding = '10'
	style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
	<tr>
		<td> Kode Buku </td>
		<td> <input type = 'text' placeholder='Kode Buku' name = 'kode_buku' /> </td>
	  </tr>
	<tr>
		<td> Judul Buku </td>
		<td> <input type ='text' placeholder='Judul Buku' name = 'judul_buku' /> </td>
	  </tr>
	<tr>
		<td> Pengarang </td>
		<td> <input type = 'text' placeholder='Pengarang' name = 'pengarang' /> </td>
	  </tr>
	<tr>
		<td> Penerbit </td>
		<td> <input type = 'text' placeholder='Penerbit' name = 'penerbit' /> </td>
	  </tr>
	<tr>	
		<td> Tahun </td>
		<td> <input type = 'text' placeholder='Tahun' name = 'tahun' /> </td>
	  </tr>
	
		
	<tr>
	<td colspan = '3' align = 'center'>
	<input type = 'submit' name = 'submit' value = 'Submit'/>
	<input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
	</tr>
</table>
<a href = 'index.php'> Kembali </a>
</form>
</body>
</html>