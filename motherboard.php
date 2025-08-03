<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.65">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <title>EZPC Store</title>

    <!-- ICON LOGO -->
    <link rel="shortcut icon" type="x-icon" href="./public_images/LogoTag-ezpc.png">

    <link rel="icon" type="image/png" href="img_PCGuide/favicon.png">
    <link rel="stylesheet" href="css/default.css" type="text/css">
    <link rel="stylesheet" href="css/ShopRAM.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
</head>

<style>
            .header_logo, .header_inner a, .m-menu__toggle, .m-menu__header, .m-menu__overlay, .card_description, .m-menu__header span, .header h1, .container h2, .products h3, .cost_label h2, .card_button {
            color: white; /* Ensure various elements are also readable */
        }

        .product_card {
            background-color: #333; /* Slightly lighter than black for contrast */
        }
    .main{
        color: white;
        background-image: url('admin/uploads/bg5.jpg')
    }
    body {
        font-family: 'Cairo', sans-serif;
       
        /* background-image: url('path/to/your/background.jpg'); Replace with your image path */
        background-size: cover; /* Adjust the size as needed */
        background-repeat: no-repeat; /* Prevent the background from repeating */
        background-position: center; /* Center the background image */
        
        /* Other styles */
    }
    
    header {
        font-family: 'Cairo', sans-serif;
        
    }
</style>

<body>
<?php
include("admin/includes/sqlconnection.php");
$sql = "SELECT * FROM ezpctable";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Arrays to store values
    $prodIdArr = [];
    $prodNameArr = [];
    $prodDescArr = [];
    $priceArr = [];
    $imageArr = [];
    $categoryArr = [];

    while ($row = $result->fetch_assoc()) {
        // values
        $prodIdArr[] = $row['id'];
        $prodNameArr[] = $row['prodname'];
        $prodDescArr[] = $row['proddesc'];
        $priceArr[] = $row['price'];
        $imageArr[] = $row['image'];
        $categoryArr[] = $row['category'];
    }
    echo "
    <header class = 'header'>
    <div class='burger_div'>
        <nav class='burger_menu'>
        <input type='checkbox' id='menu' name='menu' class='m-menu__checkbox'>
        <label class='m-menu__toggle t1' for='menu'>
            <svg width='45' height='45' viewBox='0 0 24 24' fill='none' stroke='#fff' stroke-width='2' stroke-linecap='butt' stroke-linejoin='arcs'><line x1='3' y1='16' x2='21' y2='16'></line><line x1='3' y1='10' x2='21' y2='10'></line><line x1='3' y1='22' x2='21' y2='22'></line></svg>
        </label>
        <label class='m-menu__overlay' for='menu'></label>

        <div class='m-menu'>
            <div class='m-menu__header'>
            <label class='m-menu__toggle' for='menu'>
                <svg width='35' height='35' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='butt' stroke-linejoin='arcs'>
                <line x1='18' y1='6' x2='6' y2='18'></line>
                <line x1='6' y1='6' x2='18' y2='18'></line>
                </svg>
            </label>
            <span>МЕNU</span>
            </div>
            <ul>
            <li><a href='index.php'>Home</a></li>
            <li>
                <label class='a-label__chevron' for='item-2'>Store</label>
                <input type='checkbox' id='item-2' name='item-2' class='m-menu__checkbox'>
                <div class='m-menu'>
                <div class='m-menu__header'>
                    <label class='m-menu__toggle' for='item-2'>
                    <svg width='35' height='35' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='butt' stroke-linejoin='arcs'>
                        <path d='M19 12H6M12 5l-7 7 7 7'/>
                    </svg>
                    </label>
                    <span>Store</span>
                </div>
                <ul>
                    <li>
                    <label class='a-label__chevron' for='item-2-1'>Graphic Card</label>
                    <input type='checkbox' id='item-2-1' name='item-2' class='m-menu__checkbox'>
                    <div class='m-menu'>
                        <div class='m-menu__header'>
                        <label class='m-menu__toggle' for='item-2-1'>
                            <svg width='35' height='35' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='butt' stroke-linejoin='arcs'>
                            <path d='M19 12H6M12 5l-7 7 7 7'/>
                            </svg>
                        </label>
                        <span>Graphic Card</span>
                        </div>
                    </div>
                    </li>
                    <li>
                    <label class='a-label__chevron' for='item-2-2'>Monitors</label>
                    <input type='checkbox' id='item-2-2' name='item-2' class='m-menu__checkbox'>
                    <div class='m-menu'>
                        <div class='m-menu__header'>
                        <label class='m-menu__toggle' for='item-2-2'>
                            <svg width='35' height='35' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='butt' stroke-linejoin='arcs'>
                            <path d='M19 12H6M12 5l-7 7 7 7'/>
                            </svg>
                        </label>
                        <span>Monitors</span>
                        </div>
                    </div>
                    </li>
                    <li><a href='./ShopRAM.php'>Motherboard</a></li>
                    <li>
                    <label class='a-label__chevron' for='item-2-4'>Motherboard</label>
                    <input type='checkbox' id='item-2-4' name='item-2' class='m-menu__checkbox'>
                    <div class='m-menu'>
                        <div class='m-menu__header'>
                        <label class='m-menu__toggle' for='item-2-4'>
                            <svg width='35' height='35' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='butt' stroke-linejoin='arcs'>
                            <path d='M19 12H6M12 5l-7 7 7 7'/>
                            </svg>
                        </label>
                        <span>Mouse & Keyboard</span>
                        </div>
                    </div>
                    </li>
                    <li>
                    <label class='a-label__chevron' for='item-2-5'>Power & Supply</label>
                    <input type='checkbox' id='item-2-5' name='item-2' class='m-menu__checkbox'>
                    <div class='m-menu'>
                        <div class='m-menu__header'>
                        <label class='m-menu__toggle' for='item-2-5'>
                            <svg width='35' height='35' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='butt' stroke-linejoin='arcs'>
                            <path d='M19 12H6M12 5l-7 7 7 7'/>
                            </svg>
                        </label>
                        <span>Power & Supply</span>
                        </div>
                    </div>
                    </li>
                </ul>
                </div>
            </li>
            <li><a href='./Contacts.php'>ABOUT</a></li>
            <br><br>
            <li><a href='admin/index.php'>Log In</a>
            </ul>
        </div>
        </nav>
    </div>
    <div id='nav_menu'>
        <div class='header_inner'>
        <a href='index.php'>
            <div class='header_logo'>EZPC</div>
            <img src='img_PCGuide/favicon.png' alt = 'PC_Logo_Header' id='PC_Logo_Header'>
        </a>
        </div>
        <nav id='nav_buttons'>
        <ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href = 'shopRAM.php'>Store</a>
            <ul>
                <li><a href='graphics.php'>Graphic Card</a></li>
                <li><a href='monitors.php'>Monitors</a></li>
                <li><a href='motherboard.php'>Motherboard</a></li>
                <li><a href='mouse.php'>Mouse & Keyboard</a></li>
                <li><a href='power.php'>Power & Supply</a></li>
            </ul>
            </li>
            <li><a href='./Contacts.php'>ABOUT</a></li>
        </ul>
        </nav>
        <nav id='nav_account'>
        <ul>
        <li><a href='admin/index.php'>Log In</a>
        </li>
        </ul>
        </nav>
        <a href='checkout.php'>
        <img id='shcart' src='img_PCGuide/shcart.png' alt='PC_Logo'>
    </a>
    </div>
    </header>

    <div class='wrapper'>
    <main class='main'>
        <h1>MOTHERBOARD</h1>
        <div class='container'>

        <div id='no_prods'><h2>No such products are available...</h2></div>

        <div class='products'>";

    for ($i = 0; $i < count($prodNameArr); $i++) {
        // Display only the specific image for each product
        if ($categoryArr[$i] === 'motherboard') {
            echo "
            <div class='product_card' id= '1'>
                <div class='img_container'>
                    <img src='admin/uploads/{$imageArr[$i]}' alt='{$prodNameArr[$i]}'>
                </div>
                <h3>{$prodNameArr[$i]}</h3>
                <div class='card_description'>
                    <p>{$prodDescArr[$i]}</p>
                </div>
                <div class='card_buttons'>
                    <label class='cost_label'><h2>₱{$priceArr[$i]}</h2></label>
                    <form action='admin/controller.php' method='post' enctype='multipart/form-data'>
                    <input type='hidden' name='txtprodid' value='" . $prodIdArr[$i] . "'>
                    <input type='hidden' name='txtprodname' value='" . $prodNameArr[$i] . "'>
                    <input type='hidden' name='txtproddesc' value='" . $prodDescArr[$i] . "'>
                    <input type='hidden' name='txtprice' value='" . $priceArr[$i] . "'>
                    <input type='hidden' name='txtimage' value='" . $imageArr[$i] . "'>
                    <input type='hidden' name='txtcategory' value='" . $categoryArr[$i] . "'>
                        <button type='submit' name='save_cart' class='card_button btn_cart'>Add to Cart</button>
                    </form>
                </div>  
            </div>
            ";
        }
    }

    echo "
        </div>
        </div>
    </main>
    </div>
    ";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>