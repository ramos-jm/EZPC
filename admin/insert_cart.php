<!DOCTYPE html>
<html>
<head>
    <title>Insert Cart</title>
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
    <div class="container">
        <h1><b>INSERT CART TABLE</b></h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>PRODUCT ID: </label>
                <input type="text" name="txtprodid" class="form-control" required>
            </div>


            <div class="form-group">
                <label>PRODUCT NAME: </label>
                <input type="text" name="txtprodname" class="form-control" required>
            </div>

            <div class="form-group">
                <label>PRODUCT DECRIPTION: </label>
                <input type="text" name="txtproddesc" class="form-control" required>
            </div>

            <div class="form-group">
                <label>PRODUCT PRICE: </label>
                <input type="text" name="txtprice" class="form-control" required>
            </div>
   
            <div class="form-group">
                <label>PRODUCT IMAGE: </label>
                <input type="file" name="txtimage" class="form-control-file" required>
            </div>

            <div class="form-group">
                <label>CATEGORY: </label>
                <select name="txtcategory" class="form-control" required>
                    <option value="unknown"></option>          
                    <option value='monitor'>Monitor</option>
                    <option value='graphicscard'>Graphics Card</option>
                    <option value='motherboard'>Motherboard</option>
                    <option value='mousekb'>Mouse & Keyboard</option>
                    <option value='psu'>Power Suppy Unit</option>
                </select>
            </div>
            <button type="submit" name="save_cart_admin" class="btn btn-success">Save Cart</button>
        </form>
    </div>
</body>
</html>