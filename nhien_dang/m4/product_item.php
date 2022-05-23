<?php

include_once "lib/css/php/functions.php";
include_once "parts/templates.php";

$NFTs = makeQuery(makeConn(), "SELECT * FROM `NFTs` WHERE `id`=" . $_GET['id'])[0];

$images = explode(",", $NFTs->images);

$image_elements = array_reduce($images, function ($r, $o) {
    return $r . "<img src='img/$o'>";
});
 
// print_p($NFTs);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Item</title>

    <?php include "parts/meta.php"; ?>
    <?php include "parts/navbar.php"; ?>

    <script src="js/product_thumbs.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

</head>

<body>


    <div class="styleguidecontainer gapContainer">
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card ">
                    <div class="images-main">
                        <img src="img/<?= $NFTs->thumbnail ?>">
                    </div>
                    <div class="images-thumbs gapContainer">
                        <?= $image_elements ?>
                    </div>
                    <div class="gapContainer">
                        <h3>Description:</h3>
                        <p><?= $NFTs->description ?></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <form class="card soft" method="post" action="cart_actions.php?action=add-to-cart">
                    <input type="hidden" name="product-id" value="<?= $NFTs->id ?>">
                    <div class="card-section">
                        <h2 class="product-title"><?= $NFTs->name ?></h2>
                        <div class="product-category"><?= $NFTs->category ?></div>
                        <div class="product-price"><?= $NFTs->price ?> ETH</div>
                    </div>
                    <div class="card-section">
                        <div class="form-control">
                            <label for="product-amount" class="form-label">Amount</label>
                            <div class="form-select">
                                <select id="product-amount" name="product-amount">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-control">
                            <label for="product-amount" class="form-label">Rarity</label>
                            <div class="form-select">
                                <select id="product-rarity" name="product-rarity">
                                    <option>Normal</option>
                                    <option>Rare</option>
                                    <option>Extremely Rare</option>
                                    <option>Ultra Rare</option>
                                </select>
                            </div>
                        </div> -->
                    </div>

                    <div class="card-section">
                        <input type="submit" class="buy-button" value="Add to Cart">
                    </div>
                </form>
            </div>

        </div>
        
        
        <div class="card soft gapContainer">
            <h2>Recommended Products</h2>
            <?php
            recommendedCategory($NFTs->category,$NFTs->id);
            ?>
            </div>
    </div>
    </div>

    <?php include "parts/footer.php"; ?>

</body>

</html>