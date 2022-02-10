<?php

  // Menangkap isi variabel dari form.php
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];

  // Format data yang akandiparsing
  $data = "$nis|$nama|$email \n";

  // Buka file config.txt, kemudian tuliskan isi variabel di atas ke dalam config.txt
  $fh = fopen("../config.txt", "a") or die("File tidak bisa dibuka");
  fwrite($fh, $data);

  // Tutup file config.txt
  fclose($fh);

  // Keterangan bila data berhasil diinput
  print "Data Berhasil Disimpan</br><a href='../index.php'>Kembali</a>";
