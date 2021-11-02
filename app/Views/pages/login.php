<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap" rel="stylesheet">
</head>

<body background="/assets/img/login.png">

    <div class="overlay"></div>
    <form action="admin.php" method="post" class="box">
        <!-- <div class="col-md-6 order-md-2">
            <img src="<?= base_url(); ?>/assets/img/login.png" alt="Image" class="img-fluid">
        </div> -->
        <div class="header">
            <h4>Login</h4>
            <p>Silahkan masukkan Username dan Password.</p>
        </div>
        <div class="login-area">
            <input type="text" class="username" placeholder="Username">
            <input type="password" class="password" placeholder="Password">
            <input type="submit" value="Login" class="submit">
            <a href="#">Forgot Password?</a>
        </div>
    </form>

</body>

</html>