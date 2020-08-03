<?php
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {

    // cek username & dan password
    if( $_POST["username"] == "yayat" && $_POST["password"] == "111") {

    // jika benar, redirect ke halaman login
        header("location: admin.php");
        exit;
    } else {
    // jila salah, tampilkan pesan error
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN admin</h1>

    <?php if(isset($error)) :?>

    <p style="color: red; font-style: italic;">Username ato pw salah</p>

    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>

            <li>
                <label for="password">Passworrd :</label>
                <input type="password" name="password" id="password">
            </li>

            <li>
                <button type="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>