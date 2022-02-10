<?php
session_start();
error_reporting(1);

// Ambil data user dari file
$file_handle = fopen("config.txt", "rb");
// $line_of_text = fgets($file_handle);
// $parts = explode('|', $line_of_text);
// $user = $parts[0];
// $pass = $parts[1];

$rows = [];
while($item = fgets($file_handle)) {
    list( $word ) = explode( "++", $item );

    $words = explode('|', $word);

    $row = [];
    $row['nik'] = rtrim($words[0], ' ');
    $row['password'] = rtrim($words[1], ' ');
    $row['email'] = rtrim($words[2], "\n");

    array_push($rows, $row);
}

fclose($file_handle);

$loginIsInvalid = false;
if (isset($_POST['submit'])) {
    $loginIsValid = array_filter($rows, function ($item) {
        if ($_POST['username'] == $item['nik'] && $_POST['password'] == $item['password']) {
            return $item;
        }
    });

    if ($loginIsValid) {
        //Membuat Session
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];

        /*Jika Ingin Pindah Ke Halaman Lain*/
        header("Location: home.php"); //Pindahkan Kehalaman Admin
        exit;
    } else {
        $loginIsInvalid = true;
    }
}

?>

<form align="center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <h1>Login</h1>
    <input size="30" type="text" name="username" id="username" placeholder="NIK" required>
    <br><br>
    <input size="30" type="text" name="password" id="password" placeholder="Nama Lengkap" required>
    <br><br>
    <a href="page/registrasi_form.php"><button type="button">Saya Pengguna Baru</button></a> <button type="submit" class="btn" name="submit" value="submit">Masuk</button>

    <?php if ($loginIsInvalid) : ?>
    <p align="center" style="color:red;">Username Atau Password Tidak Benar</p>
    <?php endif; ?>
</form>
