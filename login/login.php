<?php
include "koneksi.php";
session_start();
if (isset($_SESSION['username'])){
header ("location:index.php");
}
?>
<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<form method="post" name="login" action="cek_login.php">
  <table width="200" border="1" align="center">
    <tr>
      <td><table border=0 align="center" cellpadding=5 cellspacing=0>
          <tr>
            <td colspan=3 bgcolor="#0099FF"><center>
                <font size=5>LOGIN</font>
                                    </center></td>
          </tr>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td><input name="username" type="text" class="login"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input name="password" type="password" class="login"></td>
          </tr>
          <tr>
            <td colspan=2></td>
            <td><input name="submit" type="submit" class="tombol" value="LOGIN"></td>
          </tr>
          <tr>
            <td colspan=3 bgcolor="#0099FF"><div align="center"><a href="daftar.php" style="text-decoration:none"></a></div></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>