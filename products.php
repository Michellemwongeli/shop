<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>


    <?php

    $db_host = "localhost";
    $db_name = "shop";
    $db_user = "root";
    $db_pass = "";
    
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


    $sqlFetch = "SELECT * FROM product_information ORDER BY id ASC";
    $result = mysqli_query($conn, $sqlFetch) or die(mysqli_error($connection));

    ?>


    <table>
        <thead>
            <th>name</th>
            <th>category</th>
            <th>size</th>
            <th>description</th>
            <th>price</th>
            <th>color</th>
        </thead>

        <?php
        if (mysqli_num_rows($result) > 0) :
            while ($product = mysqli_fetch_assoc($result)) :
        ?>
                <tbody>
                    <td><?php echo $product['name'] ?></td>
                    <td><?php echo $product['category'] ?></td>
                    <td><?php echo $product['size'] ?></td>
                    <td><?php echo $product['description'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $product['color'] ?></td> <br />
                </tbody>
        <?php endwhile;
        endif; ?>

    </table>

</body>

</html>