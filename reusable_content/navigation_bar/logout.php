<?php
include '../Databse_conection/conection.php';

session_start();
session_unset();
session_destroy();

header("Location: ../../MainPage/home.php");