<?php

session_start();

include('../reusable_content/Databse_conection/conection.php');

/*making data secure*/

$email=htmlspecialchars(strip_tags($_POST['email']));
$f_name=htmlspecialchars(strip_tags($_POST['f_name']));
$l_name=htmlspecialchars(strip_tags($_POST['l_name']));
$user_password=htmlspecialchars(strip_tags($_POST['password']));
$username=htmlspecialchars(strip_tags($_POST['username']));
$password=$username.$user_password;
$password=password_hash($password, PASSWORD_BCRYPT);

/*prepare queries for verifing conditions*/

$sql="select email from user_acc where email =:email;";
$stmt= $conn->prepare($sql);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->execute();
$email_check=$stmt->fetch();

$sql="select username from user_acc where username =:username;";
$stmt= $conn->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->execute();
$username_check=$stmt->fetch();

/*verify conditions*/

$problem_found=false;
if(strlen($f_name)<1) 
{
   $_SESSION["problems"]="f_name";
   $problem_found=true;
}elseif(strlen($l_name)<1)
{
   $_SESSION["problems"]="l_name";
   $problem_found=true;
}elseif(strlen($email)<1)
{
   $_SESSION["problems"]="email";
   $problem_found=true;
}elseif(!(strpbrk($user_password,"1234567890")) or strlen($user_password)<6)
{
   $_SESSION["problems"]="password";
   $problem_found=true;
}elseif(strlen($username)<1)
{
   $_SESSION["problems"]="username";
   $problem_found=true;
}elseif(!empty($email_check))
{
   $_SESSION["problems"]="used_email";
   $problem_found=true;
}elseif(!empty($username_check))
{
   $_SESSION["problems"]="used_username";
   $problem_found=true;
}
if($problem_found)
{
    header('Location: Sing_up.php');
    exit;
}


/*insert info into the database*/

$sql= 'INSERT INTO public.user_acc (f_name,l_name,email,user_password,username,user_role)
VALUES(:f_name,:l_name,:email,:user_password,:username,0)';

 $stmt= $conn->prepare($sql);
 $stmt->bindValue(':email', $email, PDO::PARAM_STR);
 $stmt->bindValue(':f_name', $f_name, PDO::PARAM_STR);
 $stmt->bindValue(':l_name', $l_name, PDO::PARAM_STR);
 $stmt->bindValue(':user_password', $password, PDO::PARAM_STR);
 $stmt->bindValue(':username', $username, PDO::PARAM_STR);
 $stmt->execute();

 /*going back to home page*/
   $_SESSION["username"]=$_POST['username'];
   $_SESSION["user_role"]=0;
   $_SESSION["problems"]="";
   header('Location: ../MainPage/home.php');
   exit;
 
?>