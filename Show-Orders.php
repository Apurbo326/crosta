<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crosta - View Orders</title>
    <link rel="stylesheet" href="Show-Orders.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark bg-gradient text-light">
    <h1>Viewing all the Orders</h1>
    
    <br>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer ID</th>
                <th>Order Date</th>
                <th>Total Price</th>
                <th>Order Notes</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $host = 'localhost'; 
            $username = 'root'; 
            $password = ''; 
            $database = 'crosta'; 

            $conn = mysqli_connect($host, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT * FROM `order`"; 
            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Query failed: " . mysqli_error($conn));
            }

            if (mysqli_num_rows($result) === 0) {
                echo "No orders found.";
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['customer_id']; ?></td>
                        <td><?php echo $row['order_date']; ?></td>
                        <td><?php echo $row['total_price']; ?></td>
                        <td><?php echo $row['order_notes']; ?></td>
                    </tr>
                    <?php
                }
            }
        ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>