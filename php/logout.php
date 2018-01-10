<?php
include '../db.php';
session_start();
unset($_SESSION["userEmail"]);
session_unset();
session_destroy();
header('LOCATION:../index.php');
?>