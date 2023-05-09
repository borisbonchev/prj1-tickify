<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing_up</title>
    <link rel="stylesheet" href="../reusable_content/navigation_bar/navigation.css">
    <link rel="stylesheet" href="../reusable_content/footer/footer.css">
    <link rel="stylesheet" href="Log&Sing_in_style.css">
</head>

<body>
    <?php include('../reusable_content/navigation_bar/navigation_bar.php'); ?>
    <div class="mainbox">
        <form action="Sing_up_proces.php" method="post">
            <p>
                <input type="text" name="f_name" class="box" placeholder="First name" maxlength=20>
            </p>
            <?php
                if($_SESSION["problems"]=="f_name")
                {
                    echo "<b class='error'>This field is mandatory!</b>";
                }
            ?>
            <p>
                <input type="text" name="l_name" class="box" placeholder="Last name" maxlength=20>
            </p>
            <?php
                if($_SESSION["problems"]=="l_name")
                {
                    echo "<b class='error'>This field is mandatory!</b>";
                }
            ?>
            <p>
                <input type="text" name="email" class="box" placeholder="Email" maxlength=30>
            </p>
            <?php
                if($_SESSION["problems"]=="email")
                {
                    echo "<b class='error'>This field is mandatory!</b>";
                }elseif($_SESSION["problems"]=="used_email")
                {
                    echo "<b class='error'>Email already in use!</b>";
                }
            ?>
            <p>
                <input type="text" name="username" class="box" placeholder="Username" maxlength=20>
            </p>
            <?php
                if($_SESSION["problems"]=="username")
                {
                    echo "<b class='error'>This field is mandatory!</b>";
                }
                elseif($_SESSION["problems"]=="used_username")
                {
                    echo "<b class='error'>Username already in use!</b>";
                }
            ?>
            <p>
                <input type="password" name="password" class="box" placeholder="Password" maxlength=20>
            </p>
            <?php
                if($_SESSION["problems"]=="password")
                {
                    echo "<b class='error'>Password must be at least 6 caracters long and have at least a number!";
                }
            ?>
            <p>
                <input type="submit" name="submit" value="Submit" class="buton">
            </p>
        </form>
    </div>

    <?php include('../reusable_content/footer/footer.php'); ?>
</body>

</html>