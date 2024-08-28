<?php 
include_once('../connectDB/conn.php');
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['send'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $selectCountry = $_POST['select-country'];
        $role = isset($_POST['radiobtn']) ? $_POST['radiobtn'] : null;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $companyName = $_POST['companyName'];
        $name = $_POST['name'];
        $confPass = isset($_POST['confPass']) ? $_POST['confPass'] : '';
        $errors = [];

        $check_user = mysqli_query($conn, "SELECT * FROM `signup` WHERE email='$email'");
        if ($check_user && mysqli_num_rows($check_user) != 0) {
            $errors[] = "This email has already been used. Please use another email.";
        }
        if (!$email) {
            $errors[] = 'Email is required.';
        }
        if (strlen($password) < 8) {
            $errors[] = 'Password needs to have a minimum of 8 characters.';
        }
        if (strlen($password) > 20) {
            $errors[] = 'Password needs to have a maximum of 20 characters.';
        }
        if ($confPass != $password) {
            $errors[] = 'Confirm password does not match.';
        }
        if (!$confPass) {
            $errors[] = 'Confirm password is required.';
        }
        if (!$password) {
            $errors[] = 'Password is required.';
        }
        if (!$selectCountry) {
            $errors[] = 'Please select a country.';
        }
        if (!$role) {
            $errors[] = 'Please choose your role.';
        }
        if (!$name) {
            $errors[] = 'Name is required.';
        }
        if (!$companyName) {
            $errors[] = 'Please enter your company name.';
        }

        if (empty($errors)) {
            $sql = "INSERT INTO signup VALUES ('', '$selectCountry', '$role', '$email', '$password', '$companyName', '$name')";
            if (mysqli_query($conn, $sql)) {
                if ($role == 'Buyer') {
                    header('Location: ../Home2/homeAftersignin.php');
                    $_SESSION['name']=$name;
                    $_SESSION['user_id'] = $row['id'];
                } elseif ($role == 'Seller') {
                    header('Location: ../Home-seller/sellerPage.php');
                    $_SESSION['name']=$name;
                    $_SESSION['user_id'] = $row['id'];
                }
            } else {
                echo "<script>alert('Error inserting data');</script>";
            }
        }
    }
}
?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../Home/image/logo.svg"/>
    <link rel="stylesheet" href="signup.css">
    <title>Sign up</title>
    <style>
        form ul{
        display: inline-block;
        margin: 0;
        background: #c00;
        color: #fff;
        border-radius:4px;
        list-style-position: inside;
        list-style-type: square;
        padding: 10px;
        font-size:0.9em;
        margin: 0px 631.5px 40px;
        width: 300px;
    }
    form ul:empty{
        padding: 0;
    }
        input[type="password"]{
            border: 1px solid #d9d9d9;
        }
        input[type="text"]{
            border: 1px solid #d9d9d9;
        }
        .select-country{
            border: 1px solid #d9d9d9;
        }
        .contenair{
            margin: 0px 431.5px 40px;
        }
        .item-form{
            display: flex;
            justify-content:flex-end;
        }
        label{
            display: flex;
            align-items:center;
            justify-content:flex-end;
        }
        .radio-input{
            width: 380px;
            height: 40px;
        }
        input[type="submit"]{
            position: relative;
            left:140px;
            top:50px;
        }
    </style>
</head>
<body>
<header>
        <div class="logoh1">
            <img src="../Home/image/logo.svg" alt="logo" class="logo">
            <h1>AliBaba<span class="spanh1">.com</span></h1>
        </div>
</header>

<section class="sec1">
    <form action="" method="post" >
    <ul id="errors"><?php
                    if(isset($errors)){
                        foreach ($errors as $errors) {
                            echo '<li>' . $errors . '</li>';
                        }
                    }
                ?></ul>
    <div class="contenair">
        <div class="item-form">
        <label for="">
        Country / Region:
        </label>
        <select name="select-country" id="select-ctry" class="select-country">
            <option value="lebanon">Lebanon</option>
            <option value="japan">Japan</option>
            <option value="palastine">Palastine</option>
        </select></div>
        <div class="item-form">
        <label for="">
        Please select trade role
        </label>
        <div class="radio-input">
            <input type="radio" name="radiobtn" id="radiobtn" value="Buyer"><span>Buyer</span>
            <input type="radio" name="radiobtn" id="radiobtn" value="Seller"><span>Seller</span>
        </div></div>
        <div class="item-form">
        <label for="">
        Email:
        </label>
        <input type="text" name="email" id="email" placeholder="Please set the email as the login name"></div>
        <div class="item-form">
        <label for="">
        Login Password:
        </label>
        <input type="password" name="password" id="password" placeholder="Set the login password" ></div>
        <div class="item-form">
        <label for="">
        Confirm Password:
        </label>
        <input type="password" name="confPass"  id="confPass" placeholder="Enter the login password again"></div>
        <div class="item-form">
        <label for="">
        Company Name:
        </label>
        <input type="text" name="companyName" id="companyName" placeholder="Please enter your company name"></div>
        <div class="item-form">
        <label for="">
        Full name:
        </label>
        <input type="text" name="name" id="name" placeholder="Enter your name"></div>
        <input type="submit" name="send" id="send" value="Agree and Register">
    </div>





    </form>



</section>


    







    <script src="signup.js"></script>
</body>
</html>