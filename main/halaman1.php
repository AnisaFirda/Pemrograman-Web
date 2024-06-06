<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start();
    if($_SESSION['is_logged_in'] != TRUE)
    {
        header ("Location: ../form.html");
        exit();
    }
    ?>

    <h1>Haloo OLL!! <?php echo $_SESSION['nim']?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>