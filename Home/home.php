<?php 
include_once('../connectDB/conn.php');
if(!isset($_SESSION)){
    session_start();
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <link rel="icon" type="image/png" href="../Home/image/logo.svg"/>
    <title>Ali Baba</title>
    
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
            <div class="autantifier">
                <div class="signin2">
                    <img src="../Home/image/signin.png" alt="photo" class="signin"> 
                    <a href="../Signin/sign-in.php" class="linksignin">Sign in</a>
                    <div class="drop-down2">
                        <h4 class="h4-1">Welcome to Alibaba.com!</h4>
                        <a href="../Signin/sign-in.php"><button class="btnsignin">Sign in</button></a>
                        <h4 class="h4-2">Or, continue with:</h4>
                        <div class="imagesprogrames">
                            <img src="../Home/image/facebook.png" alt="facebook" class="a">
                            <img src="../Home/image/google.png" alt="google" class="a">
                            <img src="../Home/image/linkedin.png" alt="linkedin" class="a">
                        </div>
                        <p class="p-dropdown2">
                            By signing in via social media, I agree to the Alibaba.com Free Membership 
                            Agreement and Privacy Policy, and to receive emails about the platform’s 
                            products and services.
                        </p>
                    </div>
                </div>
                <a href="../Signup/signup.php"><button class="signup">Sign Up</button></a>
            </div>
        </div>
    </header>

    <section class="sec1">
        <div class="video" id="vd">
            <div class="icon-video">
                <img src="../Home/image/icon-video.png" alt="video" >
            </div>
            <div>
                <p class="p-video">Learn about Alibaba.com</p>
            </div>
            <div class="video2" id="vd2">
                <h1 class="h1-video">Learn about Alibaba.com</h1>
                <video controls class="video3">
                    <source src='../Home/Video/about Ali baba.mp4' type='video/mp4' controls >
            </video>
            </div>
        </div>
        <h1 class="h1-section">The leading B2B ecommerce platform for <br> global trade</h1>
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
    </section>

    <section class="sec2">
        <a href="#sec3">
            <div class="div1-sec2">
                <img src="" alt="">
                <h1 class="h1-sec2">Millions of business offerings</h1>
                <p class="p-sec2">
                    Explore products and suppliers for your business 
                    from millions of offerings worldwide.
                </p>
            </div>
        </a>
        <a href="#sec6">
            <div class="div1-sec2">
                <img src="" alt="">
                <h1 class="h1-sec2">Assured quality and transactions</h1>
                <p class="p-sec2">
                    Ensure production quality from verified suppliers, 
                    with your orders protected from payment to delivery.
                </p>
            </div>
        </a>
        <a href="#sec7">
        <div class="div1-sec2">
            <img src="" alt="">
            <h1 class="h1-sec2">One-stop trading solution</h1>
            <p class="p-sec2">
                Order seamlessly from product/supplier search to order management, 
                payment, and fulfillment.
            </p>
        </div>
        </a>
        <a href="#sec8">
        <div class="div1-sec2">
            <img src="" alt="">
            <h1 class="h1-sec2">Tailored trading experience</h1>
            <p class="p4-sec2">
                Get curated benefits, such as exclusive discounts, 
                enhanced protection, and extra support, 
                to help grow your business every step of the way.
            </p>
        </div>
        </a>
    </section>


    <section class="sec3" id="sec3">
        <div class="h1-quantite">
            <h1 class="h1-sec3">
                Explore millions of offerings <br>
                tailored to your business needs
            </h1>
            <div class="quantite">
                <div class="qt11">
                    <div class="qt-1">
                        <span class="span-qt-1">200M+</span>
                        <p>products</p>
                    </div>
                    <div class="qt-2">
                        <span class="span-qt-1">200K+</span>
                        <p>suppliers</p>
                    </div>
                </div>
                <div class="qt11">
                    <div class="qt-1">
                        <span class="span-qt-1">5,900</span>
                        <p>product categories</p>
                    </div>
                    <div class="qt-3">
                        <span class="span-qt-1">200+</span>
                        <p>countries and regions</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="scrol">
            <div class="scrol-1">
                <a href="../busnisse-service/service-busniss.php?category=busnisse-service">
                    <div class="scrol-12">
                        <img src="../Home/image/service-busniss.svg" alt="logo" id="img-scrol">
                        <p id="p-scrol">Business <br> Services</p>
                    </div>
                </a>
                <a href="../busnisse-service/service-busniss.php?category=consumer-electronics">
                    <div class="scrol-12">
                        <img src="../Home/image/accesoire.jpg" alt="logo" id="img-scrol">
                        <p id="p-scrol">Apparel &<br> Accessories</p>
                    </div>
                </a>
                <a href="../busnisse-service/service-busniss.php?category=home-Garden">
                    <div class="scrol-12">
                        <img src="../Home/image/HomeAndGarden.png" alt="logo" id="img-scrol">
                        <p id="p-scrol">Home &<br> Garden</p>
                    </div>
                </a>
                <a href="../busnisse-service/service-busniss.php?category=Beauty">
                    <div class="scrol-12">
                        <img src="../Home/image/beauty.png" alt="logo" id="img-scrol">
                        <p id="p-scrol">Beauty</p>
                    </div>
                </a>
                <a href="../busnisse-service/service-busniss.php?category=packaging">
                    <div class="scrol-12">
                        <img src="../Home/image/packages.png" alt="logo" id="img-scrol">
                        <p id="p-scrol">Packaging &<br> Printing</p>
                    </div>
                </a>
                <a href="../busnisse-service/service-busniss.php?page=link6">
                    <div class="scrol-12">
                        <img src="../Home/image/shoes.png" alt="logo" id="img-scrol">
                        <p id="p-scrol">Shoes &<br> Accessories</p>
                    </div>
                </a>
                <a href="../busnisse-service/service-busniss.php?page=link7">
                    <div class="scrol-12">
                        <img src="../Home/image/industrialMachenique.png" alt="logo" id="img-scrol">
                        <p id="p-scrol">Industrial<br> Machinery</p></div>
                </a>
                <a href="../busnisse-service/service-busniss.php?page=link8">
                    <div class="scrol-12">
                        <img src="../Home/image/furniture.png" alt="logo" id="img-scrol">
                        <p id="p-scrol">Furniture</p>
                    </div>
                </a>
                <a href="../busnisse-service/service-busniss.php?page=link9">
                    <div class="scrol-12">
                        <img src="../Home/image/luggage&bags&cases.png" alt="logo" id="img-scrol">
                        <p id="p-scrol">Luggage, Bags <br> & Cases</p>
                    </div>
                </a>
                <a href="../busnisse-service/service-busniss.php?page=link10">
                    <div class="scrol-12">
                        <img src="../Home/image/vehicles&transportation.png" alt="logo" id="img-scrol">
                        <p id="p-scrol">Vehicles & <br> Transportation</p>
                    </div>
                </a>
                <a href="../busnisse-service/service-busniss.php?page=link11">
                    <div class="scrol-12">
                        <img src="../Home/image/Personal care.png" alt="logo" id="img-scrol">
                        <p id="p-scrol">Personal & care</p>
                    </div>
                </a>
                <a href="../busnisse-service/service-busniss.php?page=link12">
                    <div class="scrol-12">
                        <img src="../Home/image/Gifts&Crafts.png" alt="logo" id="img-scrol">
                        <p id="p-scrol">Gifts & Crafts</p>
                    </div>
                </a>
            </div>
            <div class="scrol-2">
                <a href="../busnisse-service/service-busniss.php?page=link13">
                    <div class="scrol-12">
                    <img src="../Home/image/Environment.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Environment</p>
                </div></a>
                <a href="../busnisse-service/service-busniss.php?page=link14"><div class="scrol-12">
                    <img src="../Home/image/Consumer Electronics.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Consumer <br> Electronics</p>
                </div></a>
                <a href="../busnisse-service/service-busniss.php?page=link15">
                    <div class="scrol-12">
                    <img src="../Home/image/Sports&Entertainment.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Sports & <br> Entertainment</p>
                </div></a>
                <a href="../busnisse-service/service-busniss.php?page=link16">
                    <div class="scrol-12">
                    <img src="../Home/image/Mother,Kids&Toys.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Mother,Kids <br> & Toys</p>
                </div></a>
                <a href="../busnisse-service/service-busniss.php?page=link17">
                    <div class="scrol-12">
                    <img src="../Home/image/Commercial Equipment.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Commercial <br> Equipment</p>
                </div></a>
                <a href="../busnisse-service/service-busniss.php?page=link18">
                    <div class="scrol-12">
                    <img src="../Home/image/Jaweher.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Jewelry <br> Eyewear</p>
                </div></a>
                <a href="../busnisse-service/service-busniss.php?page=link19">
                    <div class="scrol-12">
                    <img src="../Home/image/Vehicle Parts & Accessories.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Vehicle Parts <br> & Accessories</p>
                </div></a>
                <a href="../busnisse-service/service-busniss.php?page=link20">
                    <div class="scrol-12">
                    <img src="../Home/image/Tools & Hardware.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Tools & <br> Hardware</p>
                </div></a>
                <a href="../busnisse-service/service-busniss.php?page=link21">
                    <div class="scrol-12">
                    <img src="../Home/image/Home Appliances.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Home <br> Appliances</p>
                </div></a>
                <a href="../busnisse-service/service-busniss.php?page=link22">
                    <div class="scrol-12">
                    <img src="../Home/image/Construction & Real Estate.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Construction & <br> Real Estate</p>
                </div></a>
                <a href="../busnisse-service/service-busniss.php?page=link23">
                    <div class="scrol-12">
                    <img src="../Home/image/Vehicle Accessories.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Vehicle <br> Accessories</p>
                </div></a>
                <a href="../busnisse-service/service-busniss.php?page=link24">
                    <div class="scrol-12">
                    <img src="../Home/image/Lights & Lighting.png" alt="logo" id="img-scrol">
                    <p id="p-scrol">Lights & <br> Lighting</p>
                </div></a>
            </div>
        </div>
        <button class="carousel-button prev">◀</button>
        <button class="carousel-button next">▶</button>
    </section>

    <section class="sec4">
        <h1 class="h1-sec4">Discover your next business opportunity</h1>
        <div class="cardes-sec4">
            <div class="cardes-sec4-All">
                <div class="top-cardes">
                    <h3 class="h3-cardes-sec4">Top ranking</h3>
                    <a href="#" class="a-sec4">View more</a>
                </div>
                <div class="carousel">
                    <div class="bottom1-cardes">
                        <!-- تكرار العنصر 5 مرات -->
                        <div class="carousel-item">
                            <div class="bottom-cardes">
                                <h3 class="h3-bottom-carde">Most popular</h3>
                                <p class="p-bottom-carde">Video Game Consoles</p>
                                <div class="img-1-div-1">
                                    <img src="../Home/image/img-1-div-1.jpg" alt="img" class="img-ps-1">
                                </div>
                                <div class="img-2-3-4-div-2">
                                    <div class="div-div-2">
                                        <img src="../Home/image/ps-img2.png" alt="img" class="img-ps-2">
                                    </div>
                                    <div class="div-div-2">
                                        <img src="../Home/image/ps-img3.png" alt="img" class="img-ps-2">
                                    </div>
                                    <div class="div-div-2">
                                        <img src="../Home/image/ps-img4.png" alt="img" class="img-ps-2">
                                    </div>
                                </div>
                            </div>
                            <!-- تكرار العنصر -->
                            <div class="bottom-cardes">
                                <h3 class="h3-bottom-carde">Most popular</h3>
                                <p class="p-bottom-carde">Wi-fi Handheld Game Players</p>
                                <div class="img-1-div-1">
                                    <img src="../Home/image/maske-ps.png" alt="img" class="img-ps-1">
                                </div>
                                <div class="img-2-3-4-div-2">
                                    <div class="div-div-2">
                                        <img src="../Home/image/img-nitendo.png" alt="img" class="img-ps-2">
                                    </div>
                                    <div class="div-div-2">
                                        <img src="../Home/image/nitendo-black.png" alt="img" class="img-ps-2">
                                    </div>
                                    <div class="div-div-2">
                                        <img src="../Home/image/nitendo-black-mov.png" alt="img" class="img-ps-2">
                                    </div>
                                </div>
                            </div>
                            <!-- العنصر الثالث -->
                            <div class="bottom-cardes">
                                <h3 class="h3-bottom-carde">Most popular</h3>
                                <p class="p-bottom-carde">Men's T-Shirts</p>
                                <div class="img-1-div-1">
                                    <img src="../Home/image/img-kanze.jpg" alt="img" class="img-ps-1">
                                </div>
                                <div class="img-2-3-4-div-2">
                                    <div class="div-div-2">
                                        <img src="../Home/image/images.jpg" alt="img" class="img-ps-2">
                                    </div>
                                    <div class="div-div-2">
                                        <img src="../Home/image/kanze-carde-3.jpg" alt="img" class="img-ps-2">
                                    </div>
                                    <div class="div-div-2">
                                        <img src="../Home/image/img-kanze-4.jpg" alt="img" class="img-ps-2">
                                    </div>
                                </div>
                            </div>
                            <!-- العنصر الرابع -->
                            <div class="bottom-cardes">
                                <h3 class="h3-bottom-carde">Most popular</h3>
                                <p class="p-bottom-carde">Men's Regular Sleeve Hoodies & Sweatshirts</p>
                                <div class="img-1-div-1">
                                    <img src="../Home/image/img-kanze-kem.png" alt="img" class="img-ps-1">
                                </div>
                                <div class="img-2-3-4-div-2">
                                    <div class="div-div-2">
                                        <img src="../Home/image/kanze-kem-2.png" alt="img" class="img-ps-2">
                                    </div>
                                    <div class="div-div-2">
                                        <img src="../Home/image/knze-em-3.png" alt="img" class="img-ps-2">
                                    </div>
                                    <div class="div-div-2">
                                        <img src="../Home/image/knze-kem-4.png" alt="img" class="img-ps-2">
                                    </div>
                                </div>
                            </div>
                            <!-- العنصر الخامس -->
                            <div class="bottom-cardes">
                                <h3 class="h3-bottom-carde">Most popular</h3>
                                <p class="p-bottom-carde">Paper Bags</p>
                                <div class="img-1-div-1">
                                    <img src="../Home/image/luxe.png" alt="img" class="img-ps-1">
                                </div>
                                <div class="img-2-3-4-div-2">
                                    <div class="div-div-2">
                                        <img src="../Home/image/luxe-2.png" alt="img" class="img-ps-2">
                                    </div>
                                    <div class="div-div-2">
                                        <img src="../Home/image/luxe-3 (1).png" alt="img" class="img-ps-2">
                                    </div>
                                    <div class="div-div-2">
                                        <img src="../Home/image/luxe-4.png" alt="img" class="img-ps-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-button1 prev1">◀</button>
                    <button class="carousel-button1 next1">▶</button>
                </div>
                </div>
            <div class="cardes-sec4-All-2">
                <div class="top-cardes">
                    <h3 class="h3-cardes-sec4">New arrivals</h3>
                    <a href="#" class="a-sec4">View more</a>
                </div>
                <div class="bottom-carde-2">
                    <div>
                        <h1 class="h1-carde-2">109,000+ products added today</h1>
                    </div>
                    <div class="img-4-carde-2">
                        <img src="../Home/image/bouza-trend-removebg-preview.png" alt="" class="img-1-carde-2">
                        <img src="../Home/image/ps-img2.png" alt=""  class="img-1-carde-2">
                        <img src="../Home/image/image-3-carde-2-removebg-preview.png" alt=""  class="img-1-carde-2">
                        <img src="../Home/image/image-4-carde-2-removebg-preview.png" alt=""  class="img-1-carde-2">
                    </div>
                </div>
                <div class="bottom-2-carde-2">
                    <div class="bottom-2-img">
                        <img src="../Home/image/bottom-2-carde-2.jpg" alt="" class="bottom-2-carde-2-img">
                    </div>
                    <div class="bottom-2-right-img">
                        <div>
                            <h2>New this week</h2>
                        </div>
                        <div>
                            <p>Products from verified Suppliers only</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardes-sec4-All-3">
                <div class="top-cardes">
                    <h3 class="h3-cardes-sec4">Top deals</h3>
                    <a href="#" class="a-sec4">View more</a>
                </div>
                <div class="bottom-1-carde-3">
                    <div class="bottom-2-img">
                        <img src="../Home/image/dollars-removebg-preview.png" alt="" class="bottom-1-carde-3-img">
                    </div>
                    <div class="bottom-3-right-img">
                        <p>180-day lowest price</p>
                    </div>
                </div>
                <div class="bottom-3-carde-3">
                    <div class="h1-carde-3">
                        <h1>Deals on best sellers</h1>
                    </div>
                    <div class="div-img-offre-carde-3">
                        <img src="../Home/image/image-carde-3-removebg-preview.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec5">
        <div class="contnaire-sec5">
            <h1 class="h1-sec5">
                Source direct-from-factory
            </h1>
        <div class="cardes-sec-5">
            <div class="carde-1-sec-5">
                <span class="span-sec-5">Get samples</span>
                <a href="#" class="a-sec-5">View more</a>
            </div>
            <div class="carde-2-sec-5">
                <span class="span-sec-5-2">Connect with top-ranking <br> manufacturers</span>
                <a href="#" class="a-sec-2">View more</a>
            </div>
            <div class="carde-3-sec-5">
                <span class="span-sec-5">Take factory live tours</span>
                <a href="#" class="a-sec-5">View more</a>
            </div>
        </div>
        </div>
    </section>

    <section class="sec6" id="sec6">
        <div class="contnaire-sec6">
            <div class="contnaire-h1-2-div">
                <h1 class="h1-sec6">Trade with confidence from <br> production quality to purchase <br> protection</h1>
            </div>
            <div class="cardes-sec6">
                <div class="carde-1-sec6">
                    <div class="under-carde-1-sec6"><p>Ensure production quality with</p></div>
                    <img src="../Home/image/Screenshot_2024-08-10_204022-removebg-preview.png" alt="" class="icon-carde1-sec-6">
                    <div class="p-carde-1-sec-6">
                        <p>
                            Connect with a variety of suppliers with third-party-verified
                            credentials and capabilities. Look for the "Verified" logo 
                            to begin sourcing with experienced suppliers your business could rely on.
                        </p>
                    </div>
                    <div class="btn-a-sec6">
                        <button class="btn-card-sec-6" id="btn-verified"><img src="../Home/image/icon-video.png" alt="">watch Video</button>
                        <a href="#" class="a-carde-sec6">Learn more</a>
                    </div>
                </div>
                <div class="carde-1-sec6">
                    <div class="under-carde-1-sec6"><p>Protect your purchase with</p></div>
                    <img src="../Home/image/Screenshot_2024-08-10_210921-removebg-preview.png" alt="" class="icon-carde1-sec-6">
                    <div class="p-carde-1-sec-6">
                        <p>
                            Source confidently with access to secure payment options, protection against
                            product or shipping issues, and mediation support for any purchase-related 
                            concerns when you order and pay on Alibaba.com.
                        </p>
                    </div>
                    <div class="btn-a-sec6">
                        <button class="btn-card-sec-6" id="btn-protected"><img src="../Home/image/icon-video.png" alt="">watch Video</button>
                        <a href="#" class="a-carde-sec6">Learn more</a>
                    </div>
                </div>
            </div>
            
            <div class="sec-6-Verified-video" id="sec-6-Verified-video">
                <h1>Learn about Verified Supplier</h1>
                <video controls class="video-verified">
                    <source src='../Home/Video/Alibaba.com- Manufacturers,1.mp4' type='video/mp4' controls >
            </video>
            </div>
            <div class="sec-6-Verified-video-2" id="sec-6-Verified-video-2">
                <h1>Learn about Trade Assurance</h1>
                <video controls class="video-verified-2">
                    <source src="../Home/Video/Alibaba.com- Manufacturers, Suppliers, Exporters & Importers from the world's largest online B2B marketplace_2.mp4" type='video/mp4' controls >
            </video>
            </div>
        </div>
    </section>

    <section class="sec7" id="sec7">
        <h1 class="h1-sec-7">Streamline ordering from search to <br> fulfillment, all in one place</h1>
        <ul class="ul-sec7">
            <li class="li-ul-sec7" id="li-1">
                <div class="div1">
                    <img src="../Home/image/search-black-removebg-preview.png" alt="" class="img-1-li-1" id="img-1-li-1">
                </div>
                    <div class="right-img">
                        <h2 class="h2-li-sec7" id="h2-li-1">Search for matches</h2>
                        <div id="div2">
                            <p>Search and filter from millions of product and supplier offerings to <br>
                                find the matching ones for your business.
                            </p>
                        </div>
                    </div>
            </li>
            <li class="li-ul-sec7" id="li-2">
                <div class="div3">
                    <img src="../Home/image/identify-the-right-removebg-preview.png" alt=""  class="img-1-li-1" id="img-2-li-2">
                </div>
                <div class="right-img">
                    <h2 class="h2-li-sec7" id="h2-li-2">Identify the right one</h2>
                    <div id="div4">
                        <p>Evaluate product quality and supplier capabilities easily and <br>
                            efficiently through verified inspections and digital sourcing tools.
                        </p>
                    </div>
                </div>
            </li>
            <li class="li-ul-sec7" id="li-3">
                <div class="div5">
                    <img src="../Home/image/paye-black-removebg-preview.png"  class="img-1-li-1" id="img-3-li-3" alt="">
                </div>
                <div class="right-img">
                    <h2 class="h2-li-sec7" id="h2-li-3">Pay with confidence</h2>
                    <div id="div6">
                        <p>Pay for your order in over 20 currencies via 20+ secure payment <br>
                            methods, including flexible payment terms.
                        </p>
                    </div>
                </div>
            </li>
            <li class="li-ul-sec7" id="li-4">
                <div class="div7">
                    <img src="../Home/image/fulfill-black-removebg-preview.png"  class="img-1-li-1" id="img-4-li-4" alt="">
                </div>
                <div class="right-img">
                    <h2 class="h2-li-sec7" id="h2-li-4">Fulfill with transparency</h2>
                    <div id="div8">
                        <p>Get your logistics needs fulfilled with customized solutions at the <br>
                            Alibaba.com Logistics Marketplace, with real-time tracking for <br>
                            26,000+ routes across 220 countries and regions, all powered by <br>
                            Alibaba.com Logistics.
                        </p>
                    </div>
                </div>
            </li>
            <li class="li-ul-sec7" id="li-5">
                <div class="div9">
                    <img src="../Home/image/manage-with-ease-black-removebg-preview.png"  class="img-1-li-1" id="img-5-li-5" alt="">
                </div>
                <div class="right-img">
                    <h2 class="h2-li-sec7" id="h2-li-5">Manage with ease</h2>
                    <div id="div10">
                        <p>
                            Check order status, manage suppliers, track payments and shipments, and <br>
                            contact after-sales support all via My Alibaba.
                        </p>
                    </div>
                </div>
            </li>
            <img src="../Home/image/image-5asa-bl-search-li btzhar.jpg" id="right-ul-img">
        </ul>
    </section>
    <section class="sec8" id="sec8">
        <div class="div-h1-sec8">
            <h1 class="h1-sec8">
                Get tailored discounts, services, and tools for <br>
                your business stage.
            </h1>
            <p>
                Grow with curated benefits offered by the free Alibaba.com Membership, whether you are a small <br>
                business needing the essentials to start sourcing or a well-established enterprise looking for tools and <br>
                solutions for more complex orders.
            </p>
            <a href="">Learn more</a>
        </div>
        <div class="carousel-container3">
            <div class="carousel3">
                <div class="carousel-item3 active">
                    <img src="../Home/image/Eva-Jane.jpg" class="profile-pic3" alt="Eva Jane">
                    <div class="h5-p"><h5>Eva Jane</h5>
                    <p>Founder of Eva Jane Beauty</p></div>
                    <div class="paragraphe-p"><p>“As an entrepreneur who is deeply <br> 
                        involved in the Beauty industry, I have <br>
                        been very devoted to creating my original <br>
                        products. Alibaba.com has been my <br>
                        trusted partner in this process.”</p></div>
                </div>
                <div class="carousel-item3">
                    <img src="../Home/image/Dr-Sayed-Ibrahim.jpg" class="profile-pic3" alt="John Doe">
                    <div class="h5-p"><h5>Dr. Sayed Ibrihim</h5>
                    <p>Founder of SprinJene</p></div>
                    <div class="paragraphe-p">
                        <p>“Once I discovered Alibaba.com, I was <br>
                            amazed at how many options I had with <br>
                            suppliers from all over the world.”</p></div>
                </div>
                <div class="carousel-item3">
                    <img src="../Home/image/Ron-williams.png" class="profile-pic3" alt="John Doe">
                    <div class="h5-p"><h5>Ron Williams and Tonja Williams</h5>
                    <p>Founder and CEO (respectively) of Ron Williams Fitness</p></div>
                    <div class="paragraphe-p"><p>“Alibaba.com is a game changer for small <br>
                        businesses like us. We were able to find <br>
                        the exact product we needed and I don't <br> 
                        think we could have sourced anything <br> 
                        without Alibaba.com.”</p></div>
                </div>
            </div>
            <button class="prev-btn3">‹</button>
            <button class="next-btn3">›</button>
        </div>
    </section>

    <section class="sec9">
            <div class="items-sec9">
                <h1>Ready to get started?</h1>
                <p>Explore millions of products from trusted suppliers by signing up today!</p>
                <button><a href="../Signup/signup.php">Sign up</a></button>
            </div>
    </section>

    <section class="sec10">
        <h1 class="h1-sec10">Empowering businesses through global trade</h1>
        <div class="p-sec10">
            <p class="p-sec10">Alibaba.com offers one-stop B2B trading solutions for global small and medium-sized businesses, <br>
                empowering them to transform through digital trade, grasp opportunities, and accelerate growth <br>
                internationally.</p>
        </div>
        <div class="cardes-sec10">
            <div class="carde1-sec10">
                <p class="p-carde1-sec10">OUR MISSION</p>
                <h1 class="h1-carde1-sec10">Make it easy to do business <br> anywhere.</h1>
            </div>
            <div class="carde2-sec10">
                <div class="carde2-part1">
                    <p class="p-carde2-parte1">
                        Hangzhou, China <br>
                        Paris, France <br>
                        Munich, Germany <br>
                        Tokyo, Japan <br>
                        Seoul, Korea <br>
                        London, UK <br>
                        New York, US <br>
                        ... <br>
                        and many other locations worldwide.</p>
                </div>
                <div class="carde2-part2">
                    <p>OUR ESG PROMISES</p>
                    <h1>Responsible technology. <br> Sustainable future.</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="sec11">
        <div class="h1-a-sec11">
            <h1 class="h1-sec11">
                Find suppliers by country or region
            </h1>
            <a href="../country/country.php" class="sec11">View more ---> </a>
        </div>
        <div class="country">
            <a href="#" class="a-sec11">
                <div><div><img src="../Home/image/Japan.png" alt=""></div>
                <p>Japan</p></div>
            </a>
            <a href="#" class="a-sec11">
                <div><div><img src="../Home/image/italya.png" alt=""></div>
                <p>Italy</p></div>
            </a>
            <a href="#" class="a-sec11" >
                <div><div><img src="../Home/image/turkiye.png" alt=""></div>
                <p>Türkiye</p></div>
            </a>
            <a href="#" class="a-sec11">
                <div><div><img src="../Home/image/malaysia.png" alt=""></div>
                <p>Malaysia</p></div>
            </a>
            <a href="#" class="a-sec11">
                <div><div><img src="../Home/image/sout-korea.png" alt=""></div>
                <p>South Korea</p></div>
            </a>
            <a href="#" class="a-sec11">
                <div> <div><img src="../Home/image/vietnam.png" alt=""> </div>
                <p>Vietnam</p></div>
            </a>
            <a href="#" class="a-sec11">
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
    <script src="../Home/home.js"></script>
</body>
</html>
