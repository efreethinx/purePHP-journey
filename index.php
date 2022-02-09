<?php
session_start();
error_reporting(0);
        // $user = array(
        //                 "user" => "demo",
        //                 "pass"=>"demo"
        //         );

// Ambil data user dari file
$file_handle = fopen("config.txt", "rb");
    $line_of_text = fgets($file_handle);
    $parts = explode('|', $line_of_text);
    $user = $parts[0];
    $pass = $parts[1];

fclose($file_handle);

if (isset($_POST['submit'])) {
    // if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']) {
    if ($_POST['username'] == $user && $_POST['password'] == $pass) {
        //Membuat Session
        $_SESSION["username"] = $_POST['username'];
        // echo "Anda Berhasil Login $_POST[username] , Silahkan Logout disini <a href='logout.php'>Klik Logout</a>";

        /*Jika Ingin Pindah Ke Halaman Lain*/
        header("Location: dashboard.php"); //Pindahkan Kehalaman Admin
    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
} else {
    display_login_form();
}
function display_login_form() { ?>
    <form align="center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <h1>Login</h1>
        <input size="30" type="text" name="username" id="username" value="NIK">
        <br><br>
        <!-- <input type="password" name="password" id="password"> -->
        <input size="30" type="text" name="password" id="password" value="Nama Lengkap">
        <br><br>
        <button><a href="registrasi_form.php">Saya Pengguna Baru</a></button> <button type="submit" class="btn" value="simpan" onclick="proses()">Masuk</button>
    </form>
<?php } ?>
