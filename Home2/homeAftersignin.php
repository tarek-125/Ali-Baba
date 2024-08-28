<?php 
include_once('../connectDB/conn.php');
if(!isset($_SESSION)){
    session_start();
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../Home/image/logo.svg"/>
    <link rel="stylesheet" href="homeAftersignin.css">
    <title>Home Page</title>
    <style>
.threeLignes{
    width: 28px;
    height: 28px;
}
.category{
    display: flex;
    justify-content:flex-start;
    align-items: center ;
    position: relative;
    left:-170px;
    cursor: pointer;
}
.category p{
    color: white;
}
.AllCategries{
    background-color:#fff;
    width: 250px;
    height:250px;
    padding: 15px;
    position: absolute;
    top:30px;
    left:-45px;
    z-index: 2;
    border-radius:10px;
    box-shadow:0px 0px 3px 4px rgba(255,255,255,0.3);
    display: none;
}
.category:hover .AllCategries {
    display: block;
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
            <div class="message">
                <img src="../Home2/image-page/message.png" class="img-message" alt="">
                <div class="drop-down-message">
                    <h2>Messages</h2>
                    <button>View details</button>
                </div>
            </div>
            <div class="notes">
                <img src="../Home2/image-page/notes.png" class="img-note" alt="">
                <div class="drop-down-notes">
                    <h3>Orders</h3>
                    <img src="../Home2/image-page/NotesTrades.png" alt="">
                    <p>Enjoy protection from payment to delivery.</p>
                    <ul>
                        <li><a href="#">Safe & easy payments</a></li>
                        <li><a href="#">Money-back policy</a></li>
                        <li><a href="#">Shipping & logistics services</a></li>
                        <li><a href="#">After-sales protections</a></li>
                    </ul>
                    <a href="#" class="a-leran">Learn more</a>
                </div>
            </div>
            <div class="shop">
                <a href="../cart-shopping/cart-shopping.php"><img src="../Home2/image-page/shop-img.png" class="shop-img" alt=""></a>
            </div>
            <div class="sign-in">
                <img src="../Home2/image-page/signin.png" class="signin-img" alt="">
                <div class="drop-down-signin">
                    Hi, <?php echo  $_SESSION['name'] ?>
                    <hr>
                    <div class="item-drop-down-signin"><a href="">My Alibaba</a></div>
                    <div class="item-drop-down-signin"><a href="">Orders</a></div>
                    <div class="item-drop-down-signin"><a href="">Messages</a></div>
                    <div class="item-drop-down-signin"><a href="">RFQs</a></div>
                    <div class="item-drop-down-signin"><a href="">Favorites</a></div>
                    <div class="item-drop-down-signin"><a href="">Accounts</a></div>
                    <hr>
                    <div class="div-signout"><a href="../signout/signout.php" class="a-signout">Sign out</a></div>
                </div>
            </div>
        </div>
    </header>

    <section class="sec1">
        <div class="contenair">
            <div class="category">
                <img src="../Home2/image-page/threeLignes.png" class="threeLignes" alt="">
                <p>All Category</p>
            <div class="AllCategries">
                    <div class="item-drop-down-signin">
                        <a href="../busnisse-service/service-busniss.php?category=packaging">Packaging</a>
                    </div>
                    <div class="item-drop-down-signin">
                        <a href="../busnisse-service/service-busniss.php?category=home-Garden">Home-Garden</a>
                    </div>
                    <div class="item-drop-down-signin">
                        <a href="../busnisse-service/service-busniss.php?category=Beauty">Beauty</a>
                    </div>
                    <div class="item-drop-down-signin">
                        <a href="../busnisse-service/service-busniss.php?category=busnisse-service">Busnisse-Service</a>
                    </div>
                    <div class="item-drop-down-signin">
                        <a href="../busnisse-service/service-busniss.php?category=consumer-electronics">Consumer-Electronics</a>
                    </div>
            </div>
            </div>
            <div class="a-products-manufateurs">
                <a href="" class="a-products">Products</a>
                <a href="">Manufacturers</a>
            </div>
            <div class="input-btn">
                <input type="search" name="search" id="search" class="search" placeholder="Search...">
                <button class="btn-search">Search</button>
            </div>
            <div class="trendSearch">
                <p class="p-trendSearch">Frequently searched:</p>
                <a href="#"><button class="btn-trend-1">scooter</button></a>
                <a href="#"><button class="btn-trend-2">iphone 15 pro max</button></a>
                <a href="#"><button class="btn-trend-1">lighter</button></a>
                <a href="#"><button class="btn-trend-1">pool</button></a>
            </div>
        </div>
    </section>
    <div class="up-sec1">
        <div class="welcom-div">
            <h2>Welcome to Alibaba.com, <?php echo $_SESSION['name']  ?></h2>
        </div>
        <div class="up-sec1-3links">
            <div class="item-up-sec1">
                <img src="../Home2/image-page/request-for-quotation.png" alt="" >
                <a href="">Request for Quotation</a>
            </div>
            <div class="item-up-sec1">
                <img src="../Home2/image-page/jawhara.png" alt="" >
                <a href="">Alibaba.com Business+</a>
            </div>
            <div class="item-up-sec1">
                <img src="../Home2/image-page/logistic.png" alt="" >
                <a href="">Alibaba.com Logistics</a>
            </div>
        </div>
    </div>
    <div class="space"></div>
    <section class="sec2">
        <img src="//s.alicdn.com/@img/imgextra/i4/O1CN01vjAyVx23FYrqBaXJd_!!6000000007226-2-tps-2880-640.png" id="slider" alt="">
    </section>
    
    <section class="sec3">
    <?php 
    $sql = "SELECT * FROM product ORDER BY RAND()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $airForwardText = $row['Air-forward'];
            $shortenedText = mb_strimwidth($airForwardText, 0, 40, "…");
    ?>
        <a href="../product_details/product-details.php?id=<?php echo $row['id']; ?>">
            <div class="container">
                <div class="mask">
                    <img src="<?php echo $row['image']; ?>" alt="logo">
                </div>
                <div class="up-img">
                
                    <p><?php echo $shortenedText ?></p>
                    <p class="p-price"><?php echo $row['price']; ?></p>
                    <p>min.order: <?php echo $row['min-order']; ?></p>
                </div>
            </div>
        </a>
    <?php 
        }
    } 
    ?>
</section>
    

    <section class="sec4">
        <div class="h1-a-sec4">
            <h1 class="h1-sec4">
                Find suppliers by country or region
            </h1>
            <a href="../country/country.php" class="sec4">View more ---> </a>
        </div>
        <div class="country">
            <a href="#" class="a-sec4">
                <div><div><img src="../Home/image/Japan.png" alt=""></div>
                <p>Japan</p></div>
            </a>
            <a href="#" class="a-sec4">
                <div><div><img src="../Home/image/italya.png" alt=""></div>
                <p>Italy</p></div>
            </a>
            <a href="#" class="a-sec4" >
                <div><div><img src="../Home/image/turkiye.png" alt=""></div>
                <p>Türkiye</p></div>
            </a>
            <a href="#" class="a-sec4">
                <div><div><img src="../Home/image/malaysia.png" alt=""></div>
                <p>Malaysia</p></div>
            </a>
            <a href="#" class="a-sec4">
                <div><div><img src="../Home/image/sout-korea.png" alt=""></div>
                <p>South Korea</p></div>
            </a>
            <a href="#" class="a-sec4">
                <div> <div><img src="../Home/image/vietnam.png" alt=""> </div>
                <p>Vietnam</p></div>
            </a>
            <a href="#" class="a-sec4">
                <div> <div><img src="../Home/image/Russia.png" alt=""> </div>
                <p>Russia</p></div>
            </a>
        </div>
    </section>



    <hr class="hr-1">
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




    <script src="homeAftersignin.js"></script>
</body>
</html>