<?php
session_start();
error_reporting(0);

// Ambil data user dari file
$file_handle = fopen("config.txt", "rb");
    $line_of_text = fgets($file_handle);
    $parts = explode('|', $line_of_text);
    $user = $parts[0];
    $pass = $parts[1];
fclose($file_handle);

if (isset($_POST['submit'])) {
    if ($_POST['username'] == $user && $_POST['password'] == $pass) {
        //Membuat Session
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];
        /*Jika Ingin Pindah Ke Halaman Lain*/
        header("Location: home.php"); //Pindahkan Kehalaman Admin
    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo '<p align="center" style="color:red;">Username Atau Password Tidak Benar</p>';
    }
} else {
    display_login_form();
}
function display_login_form() { ?>
    <form align="center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <h1>Login</h1>
        <input size="30" type="text" name="username" id="username" value="NIK">
        <br><br>
        <input size="30" type="text" name="password" id="password" value="Nama Lengkap">
        <br><br>
        <button><a href="registrasi_form.php">Saya Pengguna Baru</a></button> <button type="submit" class="btn" name="submit" value="submit">Masuk</button>
    </form>
<?php } ?>
