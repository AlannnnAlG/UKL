<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register FastFood</title>
    <link rel="icon" type="image/png" href="logotitle.png">
    <link rel="stylesheet" href="regis1.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Register</h1><br>
        <form class="form" action="regis.php" method="post">
            <input type="email" name="email" placeholder="Email"> 
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button class="button" name="sumbit" type="submit">Register</button>
            <?php
            if(isset($_POST['sumbit'])){
                $username= $_POST['username'];
                $email= $_POST['email'];
                $password= $_POST['password'];
                $level='user';

                include_once("koneksi.php");

                $result = mysqli_query($mysqli,
                "INSERT INTO user(username,email,password,level) VALUES ('$username','$email','$password','user')");

                header("location:web.php");
            }
            ?>
        </form>
        <div class="forgot">
            <p>Sudah punya akun? <a href="web.php">Login here</a></p>
        </div>
    </div>
</body>
</html>