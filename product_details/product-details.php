<?php 
include_once('../connectDB/conn.php');
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = intval($_SESSION['user_id']);
}
if (isset($_GET['id'])) {
    $product_id = intval($_GET['id']);
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-add-cart'])) {
        $check_query = "SELECT * FROM cart WHERE user_id = $user_id AND product_id = $product_id";
        $result = $conn->query($check_query);

        if ($result->num_rows > 0) {
        } else {
            $insert_query = "INSERT INTO cart (user_id, product_id) VALUES ($user_id, $product_id)";
            if ($conn->query($insert_query) === TRUE) {
            } 
        }
    }

    $query = "SELECT * FROM `product` WHERE id = $product_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../Home/image/logo.svg"/>
    <title>Product details</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #fff;
            position: fixed;
            width: 100%;
            z-index: 1001;
        }
        .logoh1 {
            display: flex;
            align-items: center;
        }
        .logo {
            width: 70px;
            height: 70px;
        }
        h1 {
            color: rgb(255, 123, 0);
        }
        .spanh1 {
            color: rgb(255, 123, 0);
            font-weight: 100;
        }
        .sec1 {
            padding-top: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding-left: 30px;
        }
        .h1-sec1 {
            color: black;
            font-size: 38px;
        }
        .p-price {
            font-size: 30px;
            color: green;
            position: relative;
            top: 60px;
        }
        .p-min-order {
            font-size: 25px;
            color: red;
            position: relative;
            top: 70px;
        }
        .sec1 .img1 {
            width: 500px;
            height: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            position: relative;
            top: 40px;
        }
        .btn-add-cart {
            background-color: rgb(255, 123, 0);
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            width: 130px;
            cursor: pointer;
            position: relative;
            top: 70px;
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
        <?php
        echo "<h1 class='h1-sec1'>" . htmlspecialchars($row['Air-forward']) . "</h1>";
        echo "<img src='" . htmlspecialchars($row['image']) . "' alt='Product Image' class='img1'>";
        echo "<p class='p-price'>Price: " . htmlspecialchars($row['price']) . "</p>";
        echo "<p class='p-min-order'>Min. Order: " . htmlspecialchars($row['min-order']) . "</p>";
        ?>
        <form action="" method="POST">
            <input type="submit" class="btn-add-cart" name="btn-add-cart" value="Add To Cart">
        </form>
    </section>
    <script src="product-details.js"></script>
</body>
</html>
<?php
    } else {
        echo "Error: Product not found";
    }
} else {
    echo "No product ID provided";
}
?>