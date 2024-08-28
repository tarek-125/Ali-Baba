<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="country.css">
    <link rel="icon" type="image/png" href="../Home/image/logo.svg"/>
    <title>Country</title>
    <style>
        .sec1{
            background-color:#fff;
        }
        .sec2{
            width: 100%;
            padding-top:30px;
            background-color:#f7f8fa;
            padding-left:30px;
            display: flex;
            flex-wrap: wrap;
            padding-bottom:70px;
        }
        .item{
            width: 255px;
            height:210px;
            background-color:#f7f8fa;
            display: flex;
            align-items:center;
        }
        .inner{
            width: 180px;
            height:180px;
            border-radius:50%;
            background-color:#fff;
            box-shadow:0px 0px 5px 2px rgba(0,0,0,0.3)
        }
        .image{
            display:flex;
            justify-content: center;
            margin-top:40px;
        }
        .image img{
            width: 81.47px;
            height:55px
        }
        .label{
            font-size:20px;
            color:#222222;
            display:flex;
            justify-content: center;
            margin-top:20px;
        }
        a{
            text-decoration:none;
        }
        footer{
            width: 100%;
            height:280px;
            background-color:#455367;
        }
    </style>
</head>
<body>
<header>
        <div class="logoh1">
            <img src="../Home/image/logo.svg" alt="logo" class="logo">
            <h1>AliBaba<span class="spanh1">.com</span></h1>
        </div>
        <input type="search" name="search" id="search" class="search" placeholder="Search...">
            <button class="btn-search">Search</button>
</header>
<section class="sec1">
    <img id="slider" src="https://img.alicdn.com/imgextra/i4/O1CN017LO3Zl1VbpBz29IsB_!!6000000002672-0-tps-1920-300.jpg" alt="Slider Image">
</section>

<section class="sec2">
    <a href="">
    <div class="item">
        <div class="inner">
            <div class="image">
                <img src="https://img.alicdn.com/tfs/TB1aIfHSFXXXXchXFXXXXXXXXXX-160-108.png" alt="">
            </div>
            <div class="label">
                India
            </div>
        </div>
    </div></a>

    <a href=""><div class="item">
        <div class="inner">
            <div class="image">
                <img src="https://img.alicdn.com/tfs/TB1VjHhSFXXXXX2apXXXXXXXXXX-160-108.png" alt="">
            </div>
            <div class="label">
                Malasiya
            </div>
        </div>
    </div></a>

    <a href=""><div class="item">
        <div class="inner">
            <div class="image">
                <img src="https://img.alicdn.com/tfs/TB1g864SFXXXXawXXXXXXXXXXXX-160-108.png" alt="">
            </div>
            <div class="label">
                Vietnam
            </div>
        </div>
    </div></a>

    <a href=""><div class="item">
        <div class="inner">
            <div class="image">
                <img src="https://img.alicdn.com/tfs/TB1_PnDSFXXXXXtXVXXXXXXXXXX-160-108.png" alt="">
            </div>
            <div class="label">
                Turkey
            </div>
        </div>
    </div></a>

    <a href=""><div class="item">
        <div class="inner">
            <div class="image">
                <img src="https://img.alicdn.com/tfs/TB18ivPSFXXXXclXpXXXXXXXXXX-160-108.png" alt="">
            </div>
            <div class="label">
                Japan
            </div>
        </div>
    </div></a>

    <a href=""><div class="item">
        <div class="inner">
            <div class="image">
                <img src="https://img.alicdn.com/tfs/TB1uVbYSFXXXXX7XpXXXXXXXXXX-160-108.png" alt="">
            </div>
            <div class="label">
                Korea
            </div>
        </div>
    </div></a>

    <a href=""><div class="item">
        <div class="inner">
            <div class="image">
                <img src="https://img.alicdn.com/tfs/TB1gr6CSFXXXXX0XVXXXXXXXXXX-160-108.png" alt="">
            </div>
            <div class="label">
                Palistan
            </div>
        </div>
    </div></a>
</section>
<footer>

</footer>

















<script>
    document.addEventListener('DOMContentLoaded', function() {
        const images = [
            "https://img.alicdn.com/imgextra/i4/O1CN017LO3Zl1VbpBz29IsB_!!6000000002672-0-tps-1920-300.jpg",
            "https://img.alicdn.com/imgextra/i2/O1CN01pV5AYD1iqYwXeKOhJ_!!6000000004464-0-tps-1920-300.jpg"
        ];

        let currentIndex = 0;
        const slider = document.getElementById('slider');

        setInterval(function() {
            currentIndex = (currentIndex + 1) % images.length;
            slider.style.opacity = 0; // اخفاء الصورة قبل تغييرها

            setTimeout(function() {
                slider.src = images[currentIndex];
                slider.style.opacity = 1; // اظهار الصورة الجديدة بعد تغييرها
            }, 0); // التحكم بالمدة الزمنية بين الإخفاء والتغيير
        }, 4000); // تغيير الصورة كل 4 ثواني
    });
</script>
</body>
</html>