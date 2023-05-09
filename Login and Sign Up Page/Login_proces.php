<?php
session_start();

include('../reusable_content/Databse_conection/conection.php');

/*prepare data*/

if(strlen($_POST['username'])<1)
{
    $_SESSION["problems"]="username";
    header('Location: http://localhost/prj1-2021-groups-implementation-prj1-2021-en-5/Login%20and%20Sign%20Up%20Page/Log_in.php');
    exit;
}

if(strlen($_POST['password'])<1)
{
    $_SESSION["problems"]="password";
    header('Location: http://localhost/prj1-2021-groups-implementation-prj1-2021-en-5/Login%20and%20Sign%20Up%20Page/Log_in.php');
    exit;
}

$username=$_POST['username'];
$password=$username.$_POST['password'];

/*verify name*/

$sql="select user_password from user_acc where username=:username;";
$stmt= $conn->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->execute();
$result=$stmt->fetch();
if(password_verify($password,$result['user_password']))
{
    $_SESSION["username"]=$_POST['username'];
    header('Location: ../MainPage/Home.php');
    exit;
}
else
{
    $_SESSION["password"]="wrong";
    header('Location: Log_in.php');
    exit;
}

?>