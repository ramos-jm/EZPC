<?php
session_start();
include("includes/sqlconnection.php");

// DELETE TO ANY TABLE
if (isset($_GET['id']) && isset($_GET['table']) && isset($_GET['control'])) {
    $id = $_GET['id'];
    $table = $_GET['table'];
    $control = $_GET['control'];

    $conn->query("DELETE FROM $table WHERE id='$id'");

    if (($table == 'ezpctable' || $table == 'cart') && $control == 'false') {
        $_SESSION['status'] = "Record Deleted Successfully";
        header('location: admin.php');
    } else if ($table == 'cart' && $control == 'true') {
        $_SESSION['status'] = "Record Deleted Successfully";
        header('location: admin.php');
    }

    $conn->close();
} else {
    echo "ID or table parameter missing";
}

// INSERT TO PRODUCT TABLE
if (isset($_POST['save_ezpctable'])) {
    $prodname = $_POST['txtprodname'];
    $proddesc = $_POST['txtproddesc'];
    $price = $_POST['txtprice'];
    $category = $_POST['txtcategory'];

    if (isset($_FILES['txtimage']['name']) && !empty($_FILES['txtimage']['name'])) {
        $image = $_FILES['txtimage']['name'];
        move_uploaded_file($_FILES['txtimage']['tmp_name'], "uploads/" . $image);
    } else {
        $image = ''; // Default value if no image is provided
    }

    $sql_content = "INSERT INTO ezpctable(prodname, proddesc, price, image, category)
    VALUES ('$prodname', '$proddesc' , '$price', '$image', '$category')";

    if ($conn->query($sql_content) === TRUE) {
        $_SESSION['status'] = "Success";
        header('location:admin.php');
    } else {
        $_SESSION['status'] = "Failed";
        header('location:insert_ezpctable.php');
    }
    $conn->close();
}

// UPDATE TO PRODUCT TABLE
if (isset($_POST['update_ezpctable'])) {
    $id = $_POST['txtid'];
    $prodname = $_POST['txtprodname'];
    $proddesc = $_POST['txtproddesc'];
    $price = $_POST['txtprice'];
    $category = $_POST['txtcategory'];

    $image_new = isset($_FILES['txtimage']['name']) ? $_FILES['txtimage']['name'] : '';
    $image_old = $_POST['txtold_image'];
    $update_image = $image_new != '' ? $image_new : $image_old;

    if ($image_new != '') {
        move_uploaded_file($_FILES['txtimage']['tmp_name'], "uploads/" . $update_image);
    }

    $sql_content = "UPDATE ezpctable SET prodname = '$prodname', proddesc = '$proddesc', price = '$price', image = '$update_image', category = '$category' WHERE id='$id'";

    if ($conn->query($sql_content) === TRUE) {
        $_SESSION['status'] = "Success";
        header('location:admin.php');
    } else {
        $_SESSION['status'] = "Failed";
        header('location:edit_ezpctable.php?id=' . $id);
    }
    $conn->close();
}

// INSERT TO CART TABLE FROM ADD TO CART BUTTON
if (isset($_POST['save_cart'])) {
    $prodid = $_POST['txtprodid'];
    $prodname = $_POST['txtprodname'];
    $proddesc = $_POST['txtproddesc'];
    $price = $_POST['txtprice'];
    $category = $_POST['txtcategory'];
    
    // Check if a new file is uploaded
    if (isset($_FILES['txtimage']['name']) && !empty($_FILES['txtimage']['name'])) {
        $image = $_FILES['txtimage']['name'];
        move_uploaded_file($_FILES['txtimage']['tmp_name'], "uploads/" . $image);
    } else {
        // Use the hidden input field value for the image file name
        $image = $_POST['txtimage'];
    }

    $sql_content = "INSERT INTO cart(prodid, prodname, proddesc, price, image, category)
    VALUES ('$prodid', '$prodname', '$proddesc' , '$price', '$image', '$category')";

    $location = 'location:../ShopRAM.php'; // Set a default location

    if ($conn->query($sql_content) === TRUE) {
        $_SESSION['status'] = "Success";
        header($location);
    } else {
        $_SESSION['status'] = "Failed";
        header($location);
    }
    $conn->close();
}


// UPDATE TO CART TABLE
if (isset($_POST['update_cart'])) {
    $id = $_POST['txtid'];
    $prodid = $_POST['txtprodid'];
    $prodname = $_POST['txtprodname'];
    $proddesc = $_POST['txtproddesc'];
    $price = $_POST['txtprice'];
    $category = $_POST['txtcategory'];

    $image_new = isset($_FILES['txtimage']['name']) ? $_FILES['txtimage']['name'] : '';
    $image_old = $_POST['txtold_image'];
    $update_image = $image_new != '' ? $image_new : $image_old;

    if ($image_new != '') {
        move_uploaded_file($_FILES['txtimage']['tmp_name'], "uploads/" . $update_image);
    }

    $sql_content = "UPDATE cart SET prodid = '$prodid', prodname = '$prodname', proddesc = '$proddesc', price = '$price', image = '$update_image', category = '$category' WHERE id='$id'";

    if ($conn->query($sql_content) === TRUE) {
        $_SESSION['status'] = "Success";
        header('location:admin.php');
    } else {
        $_SESSION['status'] = "Failed";
        header('location:edit_cart.php?id=' . $id);
    }
    $conn->close();
}

// INSERT TO CART TABLE FROM ADMIN.PHP
if (isset($_POST['save_cart_admin'])) {
    $prodid = $_POST['txtprodid'];
    $prodname = $_POST['txtprodname'];
    $proddesc = $_POST['txtproddesc'];
    $price = $_POST['txtprice'];
    $category = $_POST['txtcategory'];
    
    // Check if a new file is uploaded
    if (isset($_FILES['txtimage']['name']) && !empty($_FILES['txtimage']['name'])) {
        $image = $_FILES['txtimage']['name'];
        move_uploaded_file($_FILES['txtimage']['tmp_name'], "uploads/" . $image);
    } else {
        // Use the hidden input field value for the image file name
        $image = $_POST['txtimage'];
    }

    $sql_content = "INSERT INTO cart(prodid, prodname, proddesc, price, image, category)
    VALUES ('$prodid', '$prodname', '$proddesc' , '$price', '$image', '$category')";

    $location = 'location: admin.php'; // Set a default location

    if ($conn->query($sql_content) === TRUE) {
        $_SESSION['status'] = "Success";
        header($location);
    } else {
        $_SESSION['status'] = "Failed";
        header('location: insert_cart.php');
    }
    $conn->close();
}
?>
