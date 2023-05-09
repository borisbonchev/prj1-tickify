<?php
$host  = "prj1_postgres";
$port  = "5432";$db= "postgres";
$user  = "postgres";$pword= "mypassword";
$dsn= "pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$pword";
$conn = new PDO($dsn);
try{
    $conn= new PDO($dsn);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException$e){
    echo $e->getMessage();
}
?>