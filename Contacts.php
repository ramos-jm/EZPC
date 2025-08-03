<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
          crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=0.65">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <title>EPC Contact</title>

     <!-- ICON LOGO -->
    <link rel="shortcut icon" type="x-icon" href="./public_images/LogoTag-ezpc.png">

    <link rel="icon" type="image/png" href="img_PCGuide/favicon.png">
    <link rel="stylesheet" href="css/default.css" type="text/css">
    <link rel="stylesheet" href="css/Contacts.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<style>
#contact {
    color: #ffffff; /* Set text color to ensure visibility on the background */
}

body {
    font-family: 'Cairo', sans-serif;
    background-image: url('admin/uploads/bg3.jpg');
    background-repeat: no-repeat; /* Prevent background image from repeating */
    background-size: cover; /* Cover the entire background */
    background-attachment: fixed; /* Fix the background image */
    /* Other styles */
}

.header {
    font-family: 'Cairo', sans-serif;
}

.contactbg {
    background-image: url('admin/uploads/bg3.jpg');
    background-repeat: no-repeat; /* Prevent background image from repeating */
    background-size: cover; /* Cover the entire background */
    background-position: center; /* Center the background image */
    background-attachment: fixed; /* Fix the background image */
    padding: 50px 0; /* Add some padding for better spacing */
}

.text-center {
    text-align: center !important;
}

.page-header h1 {
    font-size: 36px;
    margin-bottom: 30px; /* Add some space below the heading */
}

.carousel-container {
    width: 100%; /* Set the width to 100% for responsiveness */
    margin: 50px auto; /* Center the carousel on the page */
}

.carousel-inner {
    position: relative;
}

.carousel-inner .item {
    display: none; /* Hide all carousel items by default */
}

.carousel-inner .item.active {
    display: block; /* Show the active carousel item */
}

.carousel-inner img {
    width: 100%; /* Make sure images fill the carousel container */
    height: auto; /* Maintain aspect ratio */
    border-radius: 10px; /* Add some border-radius for rounded corners */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Add a subtle shadow */
}

.carousel-control {
    width: 50px; /* Set width for control buttons */
    height: 50px; /* Set height for control buttons */
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    border-radius: 50%; /* Make control buttons circular */
    line-height: 50px; /* Center content vertically */
    font-size: 20px; /* Adjust font size */
    color: #fff; /* Text color */
    opacity: 0.7; /* Set initial opacity */
    position: absolute; /* Position absolutely within the carousel container */
    top: 50%; /* Align vertically in the middle */
    transform: translateY(-50%); /* Adjust vertical position */
}

.carousel-control.left {
    left: 10px; /* Position the left control button */
}

.carousel-control.right {
    right: 10px; /* Position the right control button */
}

.form-container {
    background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent background */
    padding: 30px;
    border-radius: 10px; /* Add rounded corners */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
}

.form-group {
    margin-bottom: 20px; /* Add space between form elements */
}

.form-control {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px; /* Add rounded corners to input fields */
    background-color: rgba(255, 255, 255, 0.1); /* Add a semi-transparent background */
    color: #ffffff; /* Set text color */
}

.form-control:focus {
    outline: none;
    box-shadow: none; /* Remove outline and box shadow on focus */
}

textarea.form-control {
    resize: none; /* Disable resizing of the textarea */
}

.btn-success {
    background-color: #4CAF50; /* Green */
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}

.btn-success:hover {
    background-color: #45a049; /* Darker green on hover */
}

h1 {
    width: 100%; /* Or a specific width you want */
    text-align: center; /* Optional for horizontal centering */
}
</style>


<body>

<header class = "header">
  <div class="burger_div">
    <nav class="burger_menu">
      <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox">
      <label class="m-menu__toggle t1" for="menu">
        <svg width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><line x1="3" y1="16" x2="21" y2="16"></line><line x1="3" y1="10" x2="21" y2="10"></line><line x1="3" y1="22" x2="21" y2="22"></line></svg>
      </label>
      <label class="m-menu__overlay" for="menu"></label>

      <div class="m-menu">
        <div class="m-menu__header">
          <label class="m-menu__toggle" for="menu">
            <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
          </label>
          <span>МЕNU</span>
        </div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li>
            <label class="a-label__chevron" for="item-2">Store</label>
            <input type="checkbox" id="item-2" name="item-2" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-2">
                  <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                  </svg>
                </label>
                <span>Store</span>
              </div>
              <ul>
                <li>
                  <label class="a-label__chevron" for="item-2-1">Graphic Card</label>
                  <input type="checkbox" id="item-2-1" name="item-2" class="m-menu__checkbox">
                  <div class="m-menu">
                    <div class="m-menu__header">
                      <label class="m-menu__toggle" for="item-2-1">
                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                          <path d="M19 12H6M12 5l-7 7 7 7"/>
                        </svg>
                      </label>
                      <span>Graphic Card</span>
                    </div>
                  </div>
                </li>
                <li>
                  <label class="a-label__chevron" for="item-2-2">Monitors</label>
                  <input type="checkbox" id="item-2-2" name="item-2" class="m-menu__checkbox">
                  <div class="m-menu">
                    <div class="m-menu__header">
                      <label class="m-menu__toggle" for="item-2-2">
                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                          <path d="M19 12H6M12 5l-7 7 7 7"/>
                        </svg>
                      </label>
                      <span>Monitors</span>
                    </div>
                  </div>
                </li>
                <li><a href="./ShopRAM.php">Motherboard</a></li>
                <li>
                  <label class="a-label__chevron" for="item-2-4">Motherboard</label>
                  <input type="checkbox" id="item-2-4" name="item-2" class="m-menu__checkbox">
                  <div class="m-menu">
                    <div class="m-menu__header">
                      <label class="m-menu__toggle" for="item-2-4">
                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                          <path d="M19 12H6M12 5l-7 7 7 7"/>
                        </svg>
                      </label>
                      <span>Mouse & Keyboard</span>
                    </div>
                  </div>
                </li>
                <li>
                  <label class="a-label__chevron" for="item-2-5">Power & Supply</label>
                  <input type="checkbox" id="item-2-5" name="item-2" class="m-menu__checkbox">
                  <div class="m-menu">
                    <div class="m-menu__header">
                      <label class="m-menu__toggle" for="item-2-5">
                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                          <path d="M19 12H6M12 5l-7 7 7 7"/>
                        </svg>
                      </label>
                      <span>Power & Supply</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="./Contacts.php">Contact</a></li>
          <br><br>
          <li><a href="./LogIn.php">Log In</a></li>
          <li><a href="./Registration.php">Register</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div id="nav_menu">
    <div class="header_inner">
      <a href="index.php">
        <div class="header_logo">EZPC</div>
        <img src="img_PCGuide/favicon.png" alt = "PC_Logo_Header" id="PC_Logo_Header">
      </a>
    </div>
    <nav id="nav_buttons">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href = "shopRAM.php">Store</a>
          <ul>
            <li><a href="graphics.php">Graphic Card</a></li>
            <li><a href="monitors.php">Monitors</a></li>
            <li><a href="motherboard.php">Motherboard</a></li>
            <li><a href="mouse.php">Mouse & Keyboard</a></li>
            <li><a href="power.php">Power & Supply</a></li>
          </ul>
        </li>
        <li><a href='./Contacts.php'>ABOUT</a></li>
      </ul>
    </nav>
    <nav id="nav_account">
      <ul>
      <li><a href="admin/index.php">Log In</a>

      </li>
      </ul>
    </nav>
    <a href="checkout.php">
    <img id="shcart" src="img_PCGuide/shcart.png" alt="PC_Logo">
</a>
  </div>
</header>

<?php
$folder = 'carousel/';
$images = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>

<section style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div class="container"> 
    <div class="page-header">
        <h1 style="color: white;">About Us</h1>
    </div>
    <div class="carousel-container">
        <div id="mycarousel" class="carousel slide" data-ride="carousel" style="width:1000px; margin: auto;">
            <ol class="carousel-indicators">
                <?php
                foreach ($images as $index => $image) {
                  echo "<li data-target='#mycarousel' data-slide-to='$index' ";
                  if ($index == 0) {
                    echo "class='active'";
                  }
                  echo "></li>";
                }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                foreach ($images as $index => $image) {
                  echo "<div class='item";
                  if ($index == 0) {
                    echo " active";
                  }
                  echo "'>";
                  echo "<img src='$image' style='width: 1000px; height: 600px;'>";
                  echo "<div class='carousel-caption'>";
                  echo "</div>";
                  echo "</div>";
                }
                ?>
            </div>
            <a class="left carousel-control" href="#mycarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mycarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
</section>

            <!-- Contact section -->
            <div class='contactbg text-center'>
                <section id='contact' style='display: flex; justify-content: center; align-items: center; height: 100vh;'>
                    <div style='max-width: 600px; width: 100%;'>
                        <div class='page-header'>
                            <h1>Contact Me</h1>
                        </div>
                        <div class='form-container'>
                            <form class='contact-form'>
                                <div class='form-group'>
                                    <input class='form-control form-control-lg' placeholder='Enter Your Name' type='text'>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control form-control-lg' placeholder='Enter Your E-mail' type='email'>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control form-control-lg' placeholder='Subject' type='text'>
                                </div>
                                <div class='form-group'>
                                    <textarea class='form-control form-control-lg' rows='8' placeholder='Comments'></textarea>
                                </div>
                                <div class='form-group'>
                                    <input class='btn btn-success btn-lg btn-block' type='submit' value='Submit'>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
</body>
</html>