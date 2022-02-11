<?php

$content = file_get_contents('data_NIK.txt');

$old_tgl    = $_POST['old_tanggal'];
$old_jam    = $_POST['old_jam'];
$old_lokasi = $_POST['old_lokasi'];
$old_suhu   = $_POST['old_suhu'];

// Format data yang akan direplace
$old_data = "$old_tgl|$old_jam|$old_lokasi|$old_suhu";

$tgl    = $_POST['tanggal'];
$jam    = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu   = $_POST['suhu'];

// Format data yang akan diparsing
$data = "$tgl|$jam|$lokasi|$suhu \n";

$content = str_replace($old_data, $data, $content);
file_put_contents('data_NIK.txt', $content);

print "
  <h3 align='center'>Data Berhasil Disimpan</h3></br>
  <p align='center'>
    <a href='home.php?page=catatan'><button type='button'>Lihat Data</button></a>
  </p>";

die;