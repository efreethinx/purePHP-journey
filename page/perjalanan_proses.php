<?php

  // Menangkap isi variabel dari form.php
  $tgl = $_POST['tanggal'];
  $jam = $_POST['jam'];
  $lokasi = $_POST['lokasi'];
  $suhu = $_POST['suhu'];

  // Format data yang akan diparsing
  $data = "$tgl|$jam|$lokasi|$suhu \n";

  // Buka file data_NIK.txt, kemudian tuliskan isi variabel di atas ke dalam data_NIK.txt
  $fh = fopen("data_NIK.txt", "a") or die("File tidak bisa dibuka");
  fwrite($fh, $data);

  // Tutup file data_NIK.txt
  fclose($fh);

  // Keterangan bila data berhasil diinput
  print "<h3 align='center'>Data Berhasil Disimpan</h3></br><p align='center'><a href='home.php?page=tambah'><button type='button'>Tambah Data</button></a> <a href='home.php?page=catatan'><button type='button'>Lihat Data</button></a></p>";
