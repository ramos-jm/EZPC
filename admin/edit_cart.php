<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cart</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/homeStyle.css"> <!-- Include homeStyle.css -->
    <link rel="icon" href="uploads/icon.png">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <style>
        body {
            font-family: 'Century Gothic', Arial, sans-serif;
            background: url('images/bgg.png');
            background-size: cover;
            background-position: center;
            padding-top: 50px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #001327;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="file"] {
            cursor: pointer;
        }
        img {
            margin-top: 10px;
            display: block;
            max-width: 100%;
            height: auto;
        }
        .btn-primary {
            display: block;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Your existing HTML content -->
    <div class="container">
        <h1><strong>EDIT CART</strong></h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <?php 
                getTableById($_GET['id']);
            ?>
            <button type="submit" class="btn btn-primary" name="update_cart">UPDATE CART</button>
        </form>
    </div>
</body>
</html>

<?php
    function getTableById($recno) {
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM cart WHERE id='$recno'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                    <input type='hidden' name='txtid' value='".$row['id']."'>

                    <div class='form-group'>
                    <label>PRODUCT ID: </label>
                    <input type='text' name='txtprodid' placeholder='".$row['prodid']. "'value='".$row['prodid']. "' class='form-control' >
                </div>

                <div class='form-group'>
                    <label>PRODUCT NAME: </label>
                    <input type='text' name='txtprodname' placeholder='".$row['prodname']. "'value='".$row['prodname']. "' class='form-control' >
                </div>

                <div class='form-group'>
                    <label>PRODUCT DECRIPTION: </label>
                    <input type='text' name='txtproddesc' placeholder='".$row['proddesc']. "'value='".$row['proddesc']. "'class='form-control'>
                </div>

                <div class='form-group'>
                    <label>PRODUCT PRICE: </label>
                    <input type='text' name='txtprice' placeholder='".$row['price']. "'value='".$row['price']. " 'class='form-control'>
                </div>
                    <div class='form-group'>
                        <label>Image:</label>
                        <input type='file' name='txtimage'>
                        <br>
                        <img src='uploads/".$row['image']."' width='300'>
                        <input type='hidden' name='txtold_image' value ='".$row['image']."'>
                    </div>

                <div class='form-group'>
                    <label>CATEGORY: </label>
                    <select name='txtcategory' placeholder='".$row['category']. "' class='form-control'>
                        <option value='unknown'></option>                  
                        <option value='monitor'>Monitor</option>
                        <option value='graphicscard'>Graphics Card</option>
                        <option value='motherboard'>Motherboard</option>
                        <option value='mousekb'>Mouse & Keyboard</option>
                        <option value='psu'>Power Suppy Unit</option>
                    </select>
                </div>
                    ";
            }
        } else {
            echo "no record found";
        }

        $conn->close();
    }
?>