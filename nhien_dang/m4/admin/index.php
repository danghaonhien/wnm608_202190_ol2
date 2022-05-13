<?php

include "../lib/css/php/functions.php";

// TEMPLATE
function productListItem($r,$o) {
return $r.<<<HTML
<div><a href="{$_SERVER['PHP_SELF']}?id=$o->id">$o->name</a></div>
HTML;
}

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Admin Page</title>

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
                <a>User Admin</a>
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
                // showProductPage();
            } else {
            ?>
                <h2>Product List</h2>

            <?php
                $result= makeQuery(makeConn(), "SELECT * FROM `NFTs`");
                echo array_reduce($result, 'productListItem');
            }
            ?>

        </div>

    </div>
    </div>
</body>