<!DOCTYPE html>
<html>

<head>
    <title>PRODUCT</title>
</head>

<body>
    <form action="server.php" method="post">
        <h3>Add Product Form</h3>
        <div>
            <label>Name:</label>
            <input id="name" type="text" name="name">
        </div>
        <div>
            <label>Category:</label>
            <input id="category" type="text" name="category">
        </div>
        <div>
            <label>Size:</label>
            <input id="size" type="text" name="size">
        </div>
        <div>
            <label>Description:</label>
            <input id="description" type="text" name="description">
        </div>
        <div>
            <label>Price(Ksh):</label>
            <input id="price" type="text" name="price">
        </div>
        <div>
            <label>Color:</label>
            <input id="color" type="text" name="color">
        </div>
        <div>
            <button type="submit" id="btn-add" name="btn-add">Send</button>
             <button type="cancel" name>Cancel</button>

           
        </div>

    </form>
   

</body>

</html>



