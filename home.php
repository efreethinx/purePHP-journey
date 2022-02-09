<!DOCTYPE html>
<html>
	<head>
		<title>Peduli Diri</title>
		<!-- menghubungkan dengan file css -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php
            session_start();
            if (@$_SESSION['username'] == '') {
                echo "<script>
                    alert('Silahkan Login Dahulu...')
                    window.location='index.php';
                </script>";
            } else {
                // echo "<h3 align='center'> Selamat Datang <label style='color:red'>".$_SESSION['password'].'</label> Anda Berhasil Login </h3>';
            }
        ?>
		<div class="content">
			<header>
				<img class="figura" src="img/1.jpg" alt="">
				<h1 class="judul">PEDULI DIRI</h1>
				<h3 class="deskripsi">Catatan Perjalanan</h3>
			</header>

			<div class="menu">
				<ul>
					<li><a href="home.php?page=dashboard">HOME</a></li>
					<li><a href="home.php?page=catatan">Catatan Perjalanan</a></li>
					<li><a href="home.php?page=tambah">Tambah Catatan</a></li>
					<li><a href="home.php?page=pengguna">PENGGUNA</a></li>
					<li><a href="page/logout.php">Keluar</a></li>
				</ul>
			</div>
			<div class="badan">
				<?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    switch ($page) {
                        case 'dashboard':
                            include "page/dashboard.php";
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
                    include "page/dashboard.php";
                }
                ?>
			</div>
		</div>
	</body>
</html>
