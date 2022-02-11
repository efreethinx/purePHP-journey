<?php

$content = file_get_contents('data_NIK.txt');

$tgl    = $_GET['tanggal'];
$jam    = $_GET['jam'];
$lokasi = $_GET['lokasi'];
$suhu   = $_GET['suhu'];

// Format data yang akan direplace
$data = "$tgl|$jam|$lokasi|$suhu";

$content = str_replace($data, '', $content);
file_put_contents('data_NIK.txt', $content);

print "
  <h3 align='center'>Data Berhasil Dihapus</h3></br>
  <p align='center'>
    <a href='home.php?page=catatan'><button type='button'>Lihat Data</button></a>
  </p>";

die;