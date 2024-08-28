<?php 
include_once('../connectDB/conn.php');
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['seller'])) {
    $description = $_POST['Air-forward'];
    $price = $_POST['price'];
    $min_order = $_POST['min-order'];
    $category = $_POST['category'];
    $uploadDir = '';
    switch ($category) {
        case 'packaging':
            $uploadDir = '../busnisse-service/image-packaging/';
            break;
        case 'home-Garden':
            $uploadDir = '../busnisse-service/image-home-Garden/';
            break;
        case 'Beauty':
            $uploadDir =  '../busnisse-service/image-Beauty/';
            break;
        case 'busnisse-service':
            $uploadDir =  '../busnisse-service/image-database/';
            break;
        case 'consumer-electronics':
            $uploadDir =  '../busnisse-service/image-consumer-electronics/';
            break;
    }

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['image']['tmp_name'];
        $imageName = uniqid() . '_' . basename($_FILES['image']['name']);
        $imagePath = $uploadDir . $imageName;

        if (move_uploaded_file($imageTmpPath, $imagePath)) {
            $sql = "INSERT INTO product (`Air-forward`, `price`, `min-order`, `image`, `category`) 
                    VALUES ('$description', '$price', '$min_order', '$imagePath', '$category')";
                
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Product added successfully.');</script>";
                } else {
                    echo "<script>alert('Error inserting data into database.');</script>";
                }
            } else {
                echo "<script>alert('Error uploading image.');</script>";
            }
        } else {
            echo "<script>alert('No image uploaded or error occurred.');</script>";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../Home/image/logo.svg"/>
    <link rel="stylesheet" href="sellerPage.css">
    <title>ٍseler Page</title>
    <style>
    form{
    padding-top: 120px;
    display: flex;
    justify-content:center;
    align-items:center;
}
    .item-fom{
        display:flex;
        justify-content:flex-end;
        width: 635px;
        height: 70px;
        margin: 0px 0px 16px;
        align-items:center;
    }
    input[type="text"]{
            border: 1px solid #d9d9d9;
        }
        input[type="text"]{
    width: 380px;
    height: 40px;
    padding: 5px 11px;
    border: 2px solid #d9d9d9;
}
    input[type="submit"]{
    width: 168px;
    height: 40px;
    padding: 0px 11px;
    background-color: orangered;
    color: #fff;
    border: none;
    border-radius:10px;
}
select{
    width: 380px;
    height: 40px;
    padding: 0px 11px;
}
.h1-form{
    color:#333;
    position: relative;
    right: 120px;
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

    <form action="" method="post" enctype="multipart/form-data">
        <div class="contenair">
            <div class="item-fom">
                <h1 class="h1-form">Welcom Mr/Ms <?php echo $_SESSION['name'] ; ?></h1>
            </div>
            <div class="item-fom">
                <label for="image">Insert Image Product:</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="item-fom">
                <label for="Air-forward">Description:</label>
                <textarea name="Air-forward" id="Air-forward" rows="7" cols="50"></textarea>
            </div>
            <div class="item-fom">
                <label for="price">Entre Price :</label>
                <input type="text" name="price" id="price">
            </div>
            <div class="item-fom">
                <label for="min-order">Enter min order :</label>
                <input type="text" name="min-order" id="min-order">
            </div>
            <div class="item-fom">
                <select name="category" id="">
                    <option value="">Select your Category</option>
                    <option value="packaging">Packaging</option>
                    <option value="home-Garden">Home-Garden</option>
                    <option value="Beauty">Beauty</option>
                    <option value="busnisse-service">Busnisse-Service</option>
                    <option value="consumer-electronics">Consumer-Electronics</option>
                </select>
            </div>
            <div class="item-fom"> 
                <input type="submit" name="seller" value="Seller">
            </div>
        </div>
    </from>
</body>
</html>