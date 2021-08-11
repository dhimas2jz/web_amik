<?php

include "koneksi1.php";
?>
<!DOCTYPE HTML>
<head>
	<title> TAMBAH PENGUNJUNG </title>
	<link href ="css_submit.css" rel="stylesheet" type="text/css">
	
	
</head>
<body style = 'margin : 20px; font : 16px arial;'>
	<center>
	<p> TAMBAH PENGUNJUNG </p>
	
	<form method = 'POST' action = 'aksi_tambah.php'>
	<table border = '1' cellspacing = '1' cellpadding = '10'
	style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
	<tr>
		<td> Nama Pengunjung </td>
		<td> <input type = 'text' placeholder='Nama Pengunjung' name = 'nama_pengunjung' /> </td>
	  </tr>
	<tr>
		<td> Tanggal </td>
		<td> <input type ='text' placeholder='Tanggal' name = 'tanggal' /> </td>
	  </tr>
	<tr>
		<td> Status </td>
		<td> <input type = 'text' placeholder='Status' name = 'status' /> </td>
	  </tr>
	<tr>
		<td> Buku Yang Dilihat </td>
		<td> <input type = 'text' placeholder='Buku Yang Dilihat' name = 'buku_yang_dilihat' /> </td>
	  </tr>
	<tr>	
		<td> Email </td>
		<td> <input type = 'text' placeholder='Email' name = 'email' /> </td>
	  </tr>
	
		
	<tr>
	<td colspan = '3' align = 'center'>
	<input type = 'submit' name = 'submit' value = 'Submit'/>
	<input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
	</tr>
</table>
    <a href="../listkiri/pengunjung.php"> Kembali </a>
        </form>
</body>
</html>