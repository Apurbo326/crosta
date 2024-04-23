<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crosta - Add Items to Menu</title>
    <link rel="stylesheet" href="Add-To-Menu-Backend.css">
</head>
<body>
    <?php
    $host = 'localhost'; 
    $username = 'root'; 
    $password = ''; 
    $database = 'crosta'; 

    $conn = mysqli_connect($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $item_name = $_POST['item_name'];
    $item_description = $_POST['item_description'];
    $item_price = $_POST['item_price'];
    $item_size = $_POST['item_size'];
    $item_catagory = $_POST['item_catagory'];

    $sql = "INSERT INTO menu (item_name, item_description, item_price, item_size, item_catagory) VALUES ('$item_name', '$item_description', '$item_price', '$item_size', '$item_catagory')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>The Item, named <span>'".$item_name. "'</span> Successfully stored in the Database! </h1><br><br>" .
            "<p><h3>Item details:</h3><br>" . 
            "Item name : " . $item_name . "<br>" . 
            "Item description : " . $item_description . "<br>" . 
            "Item Price : " . $item_price . "<br>" . 
            "Item size : " . $item_size . "<br>" . 
            "Item catagory : " . $item_catagory . "<br><br></p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
    <button onclick="history.back()">Back</button>
</body>
</html>
