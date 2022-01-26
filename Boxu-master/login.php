<?php
session_start();
$R_user = '';
$R_pass = '';



if (isset($_COOKIE['stay_logged'])) {


    if ($_COOKIE['stay_logged'] == 'true') {
        $R_user = $_COOKIE['user'];
        $R_pass = $_COOKIE['pass'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boxu</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <section class="main-top">
        <img class="top-wave" src="./imgs/waves/login-wave-top.svg" alt="" srcset="">
        <h1>boxu</h1>
    </section>
    <section class="login-card">
        <div class="title">Login Page</div>
        <form action="index.php" class="card-content" method="GET">
            <h3>User-Name:</h3>
            <input type="text" name="userName" class="user" value="<?= $R_user ?>">
            <h3>Password:</h3>
            <input type="password" name="password" class="password" value="<?= $R_pass ?>">
            <div style="display: flex;justify-content:center;align-items:center;align-self:flex-start; ">
                <input style="margin-left: 3.5rem;width:1rem;height:1rem" type="checkbox" name="remember_me_cookie" value="remember" id="password">
                <h3 style="margin-left: .5rem;">Remember me</h3>
            </div>
            <div class="btn-container">
                <button class="btn" Type="submit" name="logged-btn"> Login</button>
            </div>
        </form>


    </section>
    <section class="main-bottom">
        <img class="bottom-wave" src="./imgs/waves/login-bottom-wave.svg" alt="" srcset="">
        <h1>Made By Monochrome</h1>
    </section>

    <script src="./js/login.js"></script>
</body>

</html>