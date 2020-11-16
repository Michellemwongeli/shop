<?php

$db_host = "localhost";
$db_name = "shop";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


if (isset($_POST['btn-add'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $size = $_POST['size'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $color = $_POST['color'];


    $sql = "INSERT INTO product_information(name, category, size, description, price, color) VALUES ('$name', '$category', '$size', '$description', '$price', '$color')";

    $res = mysqli_query($conn, $sql);

    die($res);

    if ($res) {
        echo "Product added successfully";
    }
    

} elseif (isset($_POST['btn-order'])) {
   
    $orderdetail = $_POST['order_details'];
    $time =  $_POST['time'];


    $orders = "INSERT INTO orders(order_details) VALUES ( '$orderdetail')";

    $query = mysqli_query($conn, $orders);

    if ($orders) {
        echo "Order added successfully";
    }
}



















