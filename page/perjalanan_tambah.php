<div class="halaman">
	<form name="form1" method="post" action="/travel/perjalanan_proses.php">
    <table width="500" border="0" align="center">
      <tr>
        <td colspan="2"><h3>TAMBAH CATATAN PERJALANAN</h3></td>
      </tr>
      <tr>
        <td width="200" align="left">Tanggal</td>
        <td width="300"><input size="40" name="tanggal" type="text" id="tanggal"></td>
      </tr>
      <tr>
        <td align="left">Jam</td>
        <td><input size="40" name="jam" type="text" id="jam"></td>
      </tr>
      <tr>
        <td align="left">Lokasi yang dikunjungi</td>
        <td><input size="40" name="lokasi" type="text" id="lokasi"></td>
      </tr>
	  <tr>
        <td align="left">Suhu Tubuh</td>
        <td><input size="40" name="suhu" type="text" id="suhu"></td>
      </tr>
      <tr height="75">
		  <td align="right"><button type="reset" class="btn-reset">RESET</button></td>
		  <td align="left"><button type="submit" class="btn" value="simpan" onclick="proses()">SIMPAN</button></td>
      </tr>
    </table>
    </form>
</div>
