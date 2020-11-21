<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>


    <div class="modal">
        <form class="modal-content" action="../index.php?ctrl=login&action=login" method="post">
            <div class="imgcontainer">
                <img src="../Images/logo.jpg">
            </div>
            <div class="container">
                <input type="text" placeholder="Email address" name="userName">
                <input type="password" placeholder="Password" name="passWord">
                <input type="checkbox">
                <span>Keep me sign in</span>
                <span class="psw"><a href="#">Forgotten your password?</a></span>
                <p class="term">
                    By logging in, you agree to O DAY CO BAN GIAY <a href=#>Privacy Policy</a> and <a href=#>Terms of Use</a>
                </p>
                <button type="submit">SIGN IN</button>
            </div>
            <span class="jus">Not a member ? <a href="#">Join Us</a></span>
            <div class="container" style="background-color:#f1f1f1">
        </form>
        </div>

</body>

</html>