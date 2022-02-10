<div class="halaman">
	<form name="form1" method="post" action="page/perjalanan_proses.php">
    <table width="500" border="0" align="center">
      <tr>
        <td colspan="2"><h3>TAMBAH CATATAN PERJALANAN</h3></td>
      </tr>
      <tr>
        <td width="200" align="left">Tanggal</td>
        <td width="300" align="left"><input size="40" name="tanggal" type="date" id="tanggal" required></td>
      </tr>
      <tr>
        <td align="left">Jam</td>
        <td align="left"><input size="40" name="jam" type="time" id="jam" required></td>
      </tr>
      <tr>
        <td align="left">Lokasi yang dikunjungi</td>
        <td align="left"><input size="40" name="lokasi" type="text" id="lokasi" required></td>
      </tr>
	  <tr>
        <td align="left">Suhu Tubuh</td>
        <td align="left"><input size="40" name="suhu" type="deg" id="suhu" required></td>
      </tr>
      <tr height="75">
		  <td align="right"><button type="reset" class="btn-reset">RESET</button></td>
		  <td align="left"><button type="submit" class="btn" value="simpan" onclick="proses()">SIMPAN</button></td>
      </tr>
    </table>
    </form>
</div>
