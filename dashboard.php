<!DOCTYPE html>
<html>
<head>
	<title>Peduli Diri</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">PEDULI DIRI</h1>
		<h3 class="deskripsi">Catatan Perjalanan</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="dashboard.php?page=home">HOME</a></li>
			<li><a href="dashboard.php?page=catatan">Catatan Perjalanan</a></li>
			<li><a href="dashboard.php?page=tambah">Tambah Catatan</a></li>
			<li><a href="dashboard.php?page=pengguna">PENGGUNA</a></li>
		</ul>
	</div>
	<div class="badan">
		<?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include "page/home.php";
                break;
                case 'catatan':
                    include "page/catatan.php";
                break;
                case 'tambah':
                    include "page/perjalanan_tambah.php";
                break;
                case 'pengguna':
                    include "page/pengguna.php";
                break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
            }
        } else {
            include "page/home.php";
        }
        ?>
	</div>
</div>
</body>
</html>
