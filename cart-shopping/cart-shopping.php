<?php
include_once('../connectDB/conn.php');
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = intval($_SESSION['user_id']);
} 
$query = "
    SELECT cart.product_id, 
        product.`Air-forward` AS name, 
        product.image AS image, 
        product.price AS price, 
        product.`min-order` AS min_order
    FROM cart
    JOIN product ON cart.product_id = product.id
    WHERE cart.user_id = $user_id
";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $products = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $products = [];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../Home/image/logo.svg"/>
    <title>Cart Shopping</title>
    <style>
.sec3 {
    padding-bottom: 50px ;
    display: flex;
    justify-content:space-around;
    flex-wrap: wrap;
    gap: 10px;
    width: 100%; 
}

.item {
    width: 16%; 
    margin-bottom: 20px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    padding: 10px;
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

.p-price {
    font-size: 20px;
    font-weight: 900;
}

    </style>
</head>
<body>
<section class="sec3">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="item">
                    <div class="mask">
                        <img src="<?php echo $product['image']; ?>" alt="Product Image">
                    </div>
                    <div class="up-img">
                        <p><?php echo $product['name']; ?></p>
                        <p class="p-price">Price: <?php echo $product['price']; ?></p>
                        <p class="min-order">Min. Order: <?php echo $product['min_order']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
</section>
</body>
</html>
