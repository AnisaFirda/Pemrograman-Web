<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if($_SESSION['is_logged_in'] != TRUE)
        {
            header ("Location: ../form.html");
            exit();
        }

        echo $_SESSION['nim'];
    ?>

    <P>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, 
        repellat laboriosam. Odio laudantium reprehenderit similique pariatur 
        mollitia perferendis, minima eligendi consequuntur ipsum deleniti perspiciatis.
         Esse, explicabo hic! Nemo, laborum consectetur!
        Corrupti, sequi perspiciatis culpa accusantium perferendis fugiat. Corrupti 
        nostrum facilis voluptatibus tenetur expedita, sapiente, similique iusto mollitia adipisci 
        architecto non. Neque totam quibusdam illum accusamus? Veritatis earum facilis quaerat sed.
    </p>
</body>
</html>