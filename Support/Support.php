<?php
    session_start();
    if (isset($_SESSION["username"]))
    {
        include('Admin_support.php');
    }else
    {
        include('Customer_support.php');
    }
?>