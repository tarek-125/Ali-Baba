<?php 
include_once('../connectDB/conn.php');
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['inpt-submit'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['input-account'];
        $password = $_POST['input-password'];

        $errors = [];

        if (!$email) {
            $errors[] = 'Username is required';
        }
        if (!$password) {
            $errors[] = 'Password is required';
        }

        if (empty($errors)) {
            $sql = "SELECT * FROM `signup` WHERE email='$email' AND password='$password' LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $num_rows = mysqli_num_rows($result);
            
            if ($num_rows != 0) {
                $_SESSION['name'] = $row['fullname'];
                $_SESSION['user_id'] = $row['id'];
                $role= $row['role'];

                if ($role == 'Buyer') {
                    header('Location: ../Home2/homeAftersignin.php');
                } elseif ($role == 'Seller') {
                    header('Location: ../Home-seller/sellerPage.php');
                }
                exit(); // يجب الخروج بعد التوجيه
            } else {
                $errors[] = 'Wrong Password or Email';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="sign-in.css">
    <link rel="icon" type="image/png" href="../Signin/image/logo.svg"/>
    <title>login alibaba.com</title>
    <style>
            form ul{
        display: block;
        margin: 0;
        background: #c00;
        color: #fff;
        width: 100%;
        border-radius:4px;
        list-style-position: inside;
        list-style-type: square;
        padding: 10px;
        font-size:0.9em;
    }
    form ul:empty{
        padding: 0;
    }
    </style>
</head>
<body>
    <header class="header-signin">
        <div class="h1-logo">
            <img src="../Signin/image/logo.svg" alt="logo">
            <h1 class="h1-sign">Alibaba <span>.com</span></h1>
        </div>
    </header>
    <section>
        <div class="block-sign">
            <form action="" method="post">
            <ul id="errors"><?php
                    if(isset($errors)){
                        foreach ($errors as $error) {
                            echo '<li>' . $error . '</li>';
                        }
                    }
                ?></ul>
                <div class="form-account">
                    <label for="inpt-account">
                        Account :
                    </label>
                    <input type="text" name="input-account" id="inpt-account" class="input" placeholder="Enter your email or member ID">
                </div>
                <div class="form-password">
                    <div class="label-a">
                        <label for="inpt-password">Password :</label>
                        <a href="#" class="a-forgot">Forgot Password?</a>
                    </div>
                    <input type="password"  name="input-password" placeholder="Enter Password" id="inpt-password" class="input">
                </div>
                <input type="submit" value="Sign in" class="input-submit" id="inpt-submit" name="inpt-submit">
            </form>
            <div class="div-a">
                <a href="#" class="a-createAccount">Creat account</a>
            </div>
            <hr>
            <div class="p-logo-signin">
                <p>Sign in with:</p>
                <div class="thrid-icon-signin">
                    <img src="../Signin/image/facebook.png" alt="logo">
                    <img src="../Signin/image/google.png" alt="">
                    <img src="../Signin/image/linkedin.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <div class="footer">
        <div class="footer1">
            <div class="footer1-1">
            <div class="div-footer1">
                <h3>Get support</h3>
                <ul>
                <li><a href="">Help Center</a></li>
                <li><a href="">Live chat</a></li>
                <li><a href="">Check order status</a></li>
                <li><a href="">Refunds</a></li>
                <li><a href="">Report abuse</a></li>
                </ul>
            </div>
            <div class="div-footer1">
                <h3>Trade Assurance</h3>
                <ul>
                <li><a href="">Safe and easy payments</a></li>
                <li><a href="">Money-back policy</a></li>
                <li><a href="">On-time shipping</a></li>
                <li><a href="">After-sales protections</a></li>
                <li><a href="">Product monitoring services</a></li>
                </ul>

            </div>
            <div class="div-footer1">
                <h3>Source on Alibaba.com</h3>
                <ul>
                <li><a href="">Request for Quotation</a></li>
                <li><a href="">Membership program</a></li>
                <li><a href="">Alibaba.com Logistics</a></li>
                <li><a href="">Sales tax and VAT</a></li>
                <li><a href="">Alibaba.com Reads</a></li>
                </ul>
            </div>
            <div class="div-footer1">
                <h3>Sell on Alibaba.com</h3>
                <ul>
                <li><a href="">Start selling</a></li>
                <li><a href="">Seller Central</a></li>
                <li><a href="">Become a Verified Supplier</a></li>
                <li><a href="">Partnerships</a></li>
                <li><a href="">Download the app for <br> suppliers</a></li>
                </ul>
            </div>
            <div class="div-footer1">
                <h3>Get to know us</h3>
                <ul>
                <li><a href="">About Alibaba.com</a></li>
                <li><a href="">Corporate responsibility</a></li>
                <li><a href="">News center</a></li>
                <li><a href="">Careers</a></li>
                <li><a href=""></a></li>
                </ul>
            </div>
            </div>
            <div class="footer1-12">
                <div class="img-footer-social-media">
                    <img src="../Home/image/footer-facebook.png" alt="">
                    <img src="../Home/image/footer-linkedin.png" alt="">
                    <img src="../Home/image/footer-twiter.png" alt="">
                    <img src="../Home/image/footer-insta.png" alt="">
                    <img src="../Home/image/footer-yootube.png" alt="">
                    <img src="../Home/image/footer-tiktok.png" alt="">
                </div>
                <div class="right-imges-social">
                    <div class="right-imges-social-1">
                        Trade on the go with the <a href="#">Alibaba.com app</a>
                    </div>
                    <img src="../Home/image/google-play.png" alt="">
                    <img src="../Home/image/app-store.png" alt="">
                </div>
            </div>
        </div>
        <div class="footer2">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</body>
</html>