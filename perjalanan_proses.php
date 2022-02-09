<?php

  // Menangkapisivariabeldariform.php
  $tgl = $_POST['tanggal'];
  $jam = $_POST['jam'];
  $lokasi = $_POST['lokasi'];
  $suhu = $_POST['suhu'];

  // Format data yang akandiparsing
  $data = "$tgl|$jam|$lokasi|$suhu \n";

  // Buka file data.txt, kemudiantuliskanisivariabel di ataskedalam data.txt
  $fh = fopen("data_NIK.txt", "a") or die("File tidak bisa dibuka");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);

  // Keteranganbila data berhasildiinput
  print "Data Telah Tersimpan</br><a href='dashboard.php?page=catatan'>Kembali</a>";
