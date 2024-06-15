<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Silahkan Login</h1>
    <form action="login.php" method="post">
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" required placeholder><br><br>

        <label for="pswd">Password</label><br>
        <input type="password" id="pswd" name="pswd" required placeholder><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>