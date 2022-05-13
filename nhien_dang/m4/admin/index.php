<?php

include "../lib/css/php/functions.php";

$empty_product = (object) [
    "name"=>"",
    "description"=>"",
    "price"=>"",
    "category"=>"",
    "thumbnail"=>"",
    "images"=>"",
    "quantity"=>"",
];



function productListItem($r,$o) {
return $r.<<<HTML
<div><a hreft="{$_SERVER['PHP_SELF']}?id=$o->id">$o->name</a></div>
HTML;
}
function showProductPage($o) {
return <<<HTML
<div>$o->name</div>
<div>$o->price</div>
HTML;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Admin Page</title>

    <?php include "../parts/meta.php"; ?>
</head>

<body>
    <nav>
        <div class="nav-content">

            <!-- navigation button -->
            <div class="nav-icon">
                <div class="bar one"></div>
                <div class="bar two"></div>
            </div>

            <!-- naviagtion links -->
            <div class="nav-links">
                <a>Product Admin</a>
                <a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a>
                <a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a>

            </div>
        </div>
        </div>
    </nav>

    <div class="styleguidecontainer">

        <div class="nav-container card soft">

            <?php

            if (isset($_GET['id'])) {
                showProductPage(
                    $_GET['id']=="new" ?
                    $empty_product :
                    makeQuery(makeConn(),"SELECT * FROM `NFTs` WHERE `id` =".$_GET['id'])[0]
                );
            } else {
            ?>
                <h2>Product List</h2>
            <?php
            $result= makeQuery(makeConn(), "SELECT * FROM `NFTs`");
            echo array_reduce($result,'productListItem');
        }
            ?>
        </div>
    </div>
</body>