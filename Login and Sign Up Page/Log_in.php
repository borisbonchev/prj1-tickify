<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log_in</title>
    <link rel="stylesheet" href="../reusable_content/navigation_bar/navigation.css">
    <link rel="stylesheet" href="../reusable_content/footer/footer.css">
    <link rel="stylesheet" href="Log&Sing_in_style.css">
</head>

<body>
    <?php include('../reusable_content/navigation_bar/navigation_bar.php');?>

    <div class="mainbox">
        <form action="Login_proces.php" method="post">
            <p>
            <input type="text" name="username" class="box" placeholder="Username">
            <?php
                if($_SESSION["problems"]=="username")
                {
                    echo "<b class='error'>Username is required!</b>";
                }
            ?>
            </p>
            <p>
            <input type="password" name="password" class="box" placeholder="Password">
            <?php
                if($_SESSION["problems"]=="password")
                {
                    echo "<b class='error'>Password is required!</b>";
                }
            ?>
            </p>
            <?php
                if($_SESSION["problems"]=="wrong")
                {
                    echo "<b class='error'>Username or password is wrong!</b>";
                }
            ?>
            <p><input type="submit" name="submit" value="Submit" class="buton"></p>
        </form>
    </div>

    <?php include('../reusable_content/footer/footer.php'); ?>
</body>

</html>