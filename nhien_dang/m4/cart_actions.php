<?php
include_once "lib/css/php/functions.php";

function addToCart($p) {
    $_SESSION['cart'][] =$p['product-id'];
}



    switch($_GET['action']) {
        case "add-to-cart":
            $NFTs = makeQuery(makeConn(), "SELECT * FROM `NFTs` WHERE `id`=".$_POST['product-id'])[0];
            addToCart($_POST);
            // header("location:{$_SERVER['PHP_SELF']}?id=$id");
            break;
        case "update-cart-item":
            // header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;
        case "delete-cart-item":
            // header("location:{$_SERVER['PHP_SELF']}");
            break;
            default: 
            die("Incorrect Action");
    }

print_p([$_GET, $_POST,$_SESSION]);