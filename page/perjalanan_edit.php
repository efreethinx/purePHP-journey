<?php

$tanggal = $_GET['tanggal'];
$jam = $_GET['jam'];
$lokasi = $_GET['lokasi'];
$suhu = $_GET['suhu'];

?>

<div class="halaman">
	<form name="form1" method="post" action="home.php?page=perjalanan_proses_edit">
    <table width="500" border="0" align="center">
      <tr>
        <td colspan="2">
			<h3>EDIT CATATAN PERJALANAN</h3><hr>
		</td>
      </tr>
      <tr>
        <td width="200" align="left">Tanggal</td>
        <td width="300" align="left"><input size="40" name="tanggal" type="date" id="tanggal" required
          value="<?= date('Y-m-d', strtotime($tanggal)) ?>"></td>
        <input type="hidden" name="old_tanggal" value="<?= date('Y-m-d', strtotime($tanggal)) ?>">
      </tr>
      <tr>
        <td align="left">Jam</td>
        <td align="left"><input size="40" name="jam" type="time" id="jam" required
          value="<?= $jam ?>"></td>
        <input type="hidden" name="old_jam" value="<?= $jam ?>">
      </tr>
      <tr>
        <td align="left">Lokasi yang dikunjungi</td>
        <td align="left"><input size="40" name="lokasi" type="text" id="lokasi" required
          value="<?= $lokasi ?>"></td>
        <input type="hidden" name="old_lokasi" value="<?= $lokasi ?>">
      </tr>
	  <tr>
        <td align="left">Suhu Tubuh</td>
        <td align="left"><input size="40" name="suhu" type="deg" id="suhu" required
          value="<?= $suhu ?>"></td>
        <input type="hidden" name="old_suhu" value="<?= $suhu ?>">
      </tr>
      <tr height="75">
		  <td align="right"><button type="reset" class="btn-reset">RESET</button></td>
		  <td align="left"><button type="submit" class="btn" value="simpan">SIMPAN</button></td>
      </tr>
    </table>
    </form>
</div>
