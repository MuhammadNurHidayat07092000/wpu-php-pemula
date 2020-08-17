<?php 
require 'function.php';

if(isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = myqsli_query($conn, "SELECT * FROM user WHERE
                    username = '$username'");

    //cek username
    if(mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {

            header("location: index.php");
            exit;
        }

    }

    $error = true;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hlaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / Password Salah!</p>
    <?php endif; ?>

    <form method="post" action="">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>

            <li>
                <label for="passsword">Password :</label>
                <input type="password" name="passsword" id="passsword">
            </li>

            <li>
                <button type="submit">Login</button>
            </li>
        </ul>

        
    
    </form>
</body>
</html>