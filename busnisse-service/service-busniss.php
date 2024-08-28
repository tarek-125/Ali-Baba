<?php 
include_once('../connectDB/conn.php');
if(!isset($_SESSION)){
    session_start();
}

if (isset($_GET['category'])) {
    $category = $_GET['category']; 
} 
else {
    $category = 'home'; 
}
if ($category == 'home') {
    include('../Home/home.php');}
    else {
        $sql = "SELECT * FROM `product` WHERE `category` = '$category' ORDER BY RAND()";
        $result = mysqli_query($conn, $sql);
    }
?>


<?php 
    if($category=='busnisse-service'){
        $bgsrc="//s.alicdn.com/@img/imgextra/i4/O1CN01E6D0Zi1zJu1evrAmb_!!6000000006694-2-tps-1920-240.png_q60.jpg";
        $imgsrc="//s.alicdn.com/@sc04/kf/Hc991da6ce6d04ef590f103530a672fdeQ.jpg_100x100xz.jpg";
        $sec1h1="Business Services";
        $sec1p="Discover new and trending products";
    }
    elseif($category=='consumer-electronics'){
        $bgsrc="//s.alicdn.com/@img/imgextra/i3/O1CN01IG66It1ZCrw40fyRX_!!6000000003159-2-tps-1920-240.png_q60.jpg";
        $imgsrc="//s.alicdn.com/@sc04/kf/H09393982753f4eefb3851e502dd448fcP.jpg_100x100xz.jpg";
        $sec1h1="Consumer Electronics";
        $sec1p="Discover new and trending products";
    }
    elseif($category=='home-Garden'){
        $bgsrc="//s.alicdn.com/@img/imgextra/i2/O1CN01XBXcka24FqkmKuqkJ_!!6000000007362-0-tps-1920-240.jpg_q60.jpg";
        $imgsrc="//s.alicdn.com/@sc04/kf/H51a31d5bad584055a8bb6e1c841bfdf5m.png_100x100xz.jpg";
        $sec1h1="Home & Garden";
        $sec1p="Discover new and trending products";
    }
    elseif($category=='Beauty'){
        $bgsrc="//s.alicdn.com/@img/imgextra/i1/O1CN01OhbGTu1PbT39GOM3g_!!6000000001859-2-tps-1920-240.png_q60.jpg";
        $imgsrc="//s.alicdn.com/@sc04/kf/Hd2597b057b4a4f78a0fd931a8ab7092af.jpg_100x100xz.jpg";
        $sec1h1="Beauty";
        $sec1p="Discover new and trending products";
    }
    elseif($category=='packaging'){
        $bgsrc="//s.alicdn.com/@img/imgextra/i1/O1CN01TA364c1XWRdBSNkv4_!!6000000002931-2-tps-1920-240.png_q60.jpg";
        $imgsrc="//s.alicdn.com/@sc04/kf/H0d6241d00a3a4796a58059cc2a1679975.jpg_100x100xz.jpg";
        $sec1h1="Packaging & Printing";
        $sec1p="Discover new and trending products";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../Home/image/logo.svg"/>
    <link rel="stylesheet" href="service-busniss.css">
    <title><?php echo $sec1h1 ?></title>
    <style>
.sec1{
    background-image: url(<?php echo $bgsrc  ?>);
}
.sec3 {
    padding-top: 200px;
    padding-left: 20px;
    padding-bottom: 50px;
    display: grid;
    grid-template-columns: repeat(5, 1fr); 
    column-gap: 20px; 
    row-gap: 20px; 
    box-sizing: border-box;
}

.container {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    padding: 10px;
    box-sizing: border-box; 
}
.mask img {
    width: 100%; 
    height: 230px; 
    object-fit: cover; 
}

.up-img p {
    margin: 5px 0;
    color: #333;
}

a {
    text-decoration: none;
}

.p-price {
    font-size: 20px;
    font-weight: 900;
}

a {
    text-decoration: none; 
}
footer{
    width: 100%;
    height:250px;
    background-color: #DDD;
}
.p-price{
    font-size:23px;
    font-weight:900;
}
.leftheader {
    display: flex;
    align-items: center;
    position: relative;
    right: 150px;
}
    </style>
</head>
<body>
<header>
        <div class="logoh1">
            <img src="../Home/image/logo.svg" alt="logo" class="logo">
            <h1>AliBaba<span class="spanh1">.com</span></h1>
        </div>
        <div class="leftheader">
            <div class="language">
                <img src="../Home/image/language.png" alt="icon" class="language1">
                <span id="selected-language"></span>
                <div class="dropdown-content">
                    <label for="language">Language</label>
                    <select id="language">
                        <option value="en">English</option>
                        <option value="ar">Arabic</option>
                        <option value="fr">French</option>
                    </select>

                    <label for="currency">Currency</label>
                    <select id="currency">
                        <option value="usd">USD - US Dollar</option>
                        <option value="eur">EUR - Euro</option>
                        <option value="lbp">LBP - Lebanese Pound</option>
                    </select>
                    <button class="save-btn" onclick="updateLanguageCurrency()">Save</button>
                </div>
            </div>
        </div>
    </header>

    <section class="sec1">
        <h1><?php echo $sec1h1 ?></h1>
        <p>Discover new and trending products</p>
    </section>
    <div class="up-sec1">
        <h1>Source by category</h1>
        <div>
            <div>
                <img src="<?php echo $imgsrc ?>" alt="">
            </div>
            <a href="#">Inspection & Quality Contro...</a>
        </div>
    </div>

    <section class="sec3">
    <?php 
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <?php  $airForwardText = htmlspecialchars($row['Air-forward']);
                    $shortenedText = mb_strimwidth($airForwardText, 0, 40, "…");?>
            <a href="#">
                <div class="container">
                    <div class="mask">
                        <img src="<?php echo $row['image']; ?>" alt="logo">
                    </div>
                    <div class="up-img">
                        <p><?php  echo $shortenedText; ?> </p>
                        <p class='p-price'><?php echo $row['price']; ?></p>
                        <p>min.order: <?php echo $row['min-order']; ?></p>
                    </div>
                </div>
            </a>
            <?php
        }
    } ?> </section>
    <hr>
    <footer>

    </footer>
</body>
</html>