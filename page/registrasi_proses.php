<?php

  // Menangkapisivariabeldariform.php
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];

  // Format data yang akandiparsing
  $data = "$nis|$nama|$email \n";

  // Buka file data.txt, kemudiantuliskanisivariabel di ataskedalam data.txt
  $fh = fopen("../config.txt", "a") or die("File tidak bisa dibuka");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);

  // Keteranganbila data berhasildiinput
  print "Data Telah Tersimpan</br><a href='../index.php'>Kembali</a>";
