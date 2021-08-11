<?php

include "koneksi1.php";
?>
<!DOCTYPE HTML>
<head>
	<title> TAMBAH ANGGOTA </title>
	<link href ="css_submit.css" rel="stylesheet" type="text/css">
	
	
</head>
<body style = 'margin : 20px; font : 16px arial;'>
	<center>
	<p> TAMBAH ANGGOTA </p>
	
	<form method = 'POST' action = 'aksi_tambah.php'>
	<table border = '1' cellspacing = '1' cellpadding = '10'
	style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
	<tr>
		<td> Nama Anggota </td>
		<td> <input type = 'text' placeholder='Nama Anggota' name = 'nama_anggota' /> </td>
	  </tr>
	<tr>
		<td> Tanggal Lahir </td>
		<td> <input type ='text' placeholder='Tanggal Lahir' name = 'tanggal_lahir' /> </td>
	  </tr>
	<tr>
		<td> Jenis Kelamin </td>
		<td> <input type = 'text' placeholder='Jenis Kelamin' name = 'jenis_kelamin' /> </td>
	  </tr>
	<tr>
		<td> Alamat </td>
		<td> <input type = 'text' placeholder='Alamat' name = 'alamat' /> </td>
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
    <a href="../listkiri/anggota.php"> Kembali </a>
        </form>
</body>
</html>