<!DOCTYPE HTML>
<html>
  <head>
    <title>Travel | Daftar</title>
  </head>
  <body>
    <form name="form1" method="post" action="registrasi_proses.php">
    <table width="400" border="0" align="center">
      <tr>
        <td align="center" colspan="2"><h3>DAFTAR</h3></td>
      </tr>
      <tr>
        <td width="200">NIS</td>
        <td width="200"><input size="40" name="nis" type="text" id="nis"required></td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><input size="40" name="nama" type="text" id="nama"required></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input size="40" name="email" type="text" id="email" required></td>
      </tr>
      <tr height="50">
          <td align="right"><a href="../index.php"><button type="button">KEMBALI</button></a></td>
		  <td align="left"><button type="submit" class="btn" value="simpan" onclick="proses()">SIMPAN</button></td>
      </tr>
    </table>
    </form>
  </body>
</html>
