<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1 class="judul_login">Silahkan Login yaaa!!</h1>
    <div class="form">
        <form action="tampil.php" method="POST">
                <input type="text" placeholder="Username" name="user">
                <br>
                <input type="password" placeholder="Password" name="pw">
                <br>
                <input type="submit" name="Log-In">
        </form>
    </div>
    <a style="text-decoration:none" href="akun.php"><button class="button1">BUAT AKUN</button></a>
    

    <?php
        if(isset($_POST['Log-In'])){
            $user = $_POST['user'];
            $pw = $_POST['pw'];
        }
    ?>
</body>
</html>