<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crosta - Add Items to Menu</title>
    <link rel="stylesheet" href="Add-To-Menu-Frontend.css">
</head>
<body>
    <h1>Add Items to Menu</h1>
    <form action="Add-To_Menu-Backend.php" method="POST">
    <p>
        Item name : <input type="text" name="item_name" required><br><br>
        Item description : <input type="text" name="item_description" required><br><br>
        Item price : <input type="number" name="item_price" required><br><br>
        Item size : <select type="text" name="item_size">
                        <option value="1 person">Single Package - 1 person</option>
                        <option value="2 person">Couple Package - 2 person</option>
                        <option value="4 person">Family Package - 4 person</option>
                        <option value="6 person">XL Family Package - 6 person</option>
                    </select><br><br>
        Item catagory : <select type="text" name="item_catagory">
                        <option value="Breakfast">Breakfast</option>
                        <option value="Launch">Launch</option>
                        <option value="Dinner">Dinner</option>
                        <option value="Soft Drinks">Soft Drinks</option>
                        <option value="Juices">Juices</option>
                        <option value="Tea/Coffee">Tea/Coffee</option>
                    </select><br><br>
    </p>
    <button type="submit">Add Item</button>
    </form>
</body>
</html>