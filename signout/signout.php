<?php
session_start();
include_once('../connectDB/conn.php');
session_unset();
session_destroy();
header('location:../Home/home.php');
?>