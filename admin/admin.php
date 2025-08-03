<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel = "icon" href="uploads/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
body {
    font-family: Cairo, Arial, sans-serif;
    background: #121212;
    color: #ffffff;
    padding-top: 50px;
}

.container {
    width: 80%;
    margin: auto;
    background-color: rgba(30, 30, 30, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
}

h1, h2 {
    text-align: center;
    color: #ffffff;
}

.btn {
    margin-bottom: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
   
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ffffff;
    color: #ffffff;
}

th {
    background-color: #001327;
}

tr:nth-child(even) {

}

tr:hover {

}

.btn-primary {
    background-color: #001327;
    border-color: #001327;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-danger:hover {

    border-color: #bd2130;
}

.btn-success {
    background-color: #28a745;
    border-color: #28a745;
}

.btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Page</h1>

        <!-- Navigation -->
        <h2>PRODUCT</h2>
        <a href="insert_ezpctable.php" class="btn btn-info">Insert Product </a>
        <table class="table">
            <thead>
                <tr>
                    <th>prodID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("includes/sqlconnection.php");
                $sql = "SELECT * FROM ezpctable";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['prodname']."</td>";
                        echo "<td>".$row['proddesc']."</td>";
                        echo "<td>".$row['price']."</td>";
                        echo "<td><img src='uploads/".$row['image']."' width='100'></td>";
                        echo "<td>".$row['category']."</td>";
                        echo "<td>
                                <a href='edit_ezpctable.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>
                                <a href='controller.php?control=false&table=ezpctable&id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No records found</td></tr>"; 
                }
                $conn->close();
                ?>
            </tbody>
        </table>

        <h2>CART</h2>
        <a href="insert_cart.php" class="btn btn-info">Insert to Cart </a>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>prodID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("includes/sqlconnection.php");
                $sql = "SELECT * FROM cart";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['prodid']."</td>";
                        echo "<td>".$row['prodname']."</td>";
                        echo "<td>".$row['proddesc']."</td>";
                        echo "<td>".$row['price']."</td>";
                        echo "<td><img src='uploads/".$row['image']."' width='100'></td>";
                        echo "<td>".$row['category']."</td>";
                        echo "<td>
                                <a href='edit_cart.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>
                                <a href='controller.php?control=false&table=cart&id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No records found</td></tr>"; 
                }
                $conn->close();
                ?>
            </tbody>
        </table>


                <br>
                <br>
        <center><a href="../index.php" class="btn btn-success">Back To Home Page</a></center>
        <br>
                <br>
                <br>
                <br>
    </div>
</body>
</html>