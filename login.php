<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/bc3854343b.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="login-form">
        <div class="text">LOGIN</div>
        <form method="post" action="traitemenlogin.php">
            <div class="field">
                <div class="fas fa-envelope"></div>
                <input type="text" name="username" placeholder="username">
            </div>
            <div class="field">
                <div class="fas fa-lock"></div>
                <input type="password" name="password" placeholder="password">
            </div>
            <input type="submit" class="loginbutton" name="login" value="LOG IN">
        </form>
    </div>
</body>
</html>