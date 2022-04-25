<?php
            
include_once "lib/css/php/functions.php";

$NFTs = makeQuery(makeConn(), "SELECT * FROM `NFTs` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $NFTs->images);

$image_elements = array_reduce($images,function($r,$o){
    return $r."<img src='img/$o'>";
}); 

// print_p($NFTs);

?> <!DOCTYPE html>
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


    <div class="styleguidecontainer">
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card ">
                    <div class="images-main" >
                        <img src="img/<?= $NFTs->thumbnail ?>">
                    </div>
                    <div class="images-thumbs">
                        <?= $image_elements ?>
                        <p><?= $NFTs->description ?></p>
                    </div>  
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card ">
                    <div class="card-section">
                        <h2 class="product-title"><?= $NFTs->name ?></h2>
                        <div class="product-price"><?= $NFTs->price ?> ETH</div>
                    </div>

                    <div class="card-section">
                        <label for="product-amount" class="form-label">Amount</label>
                        <div class="form-select" id="product-amount">
                            <select>
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

                    <div class="card-section">
                        <a href="product_added_to_cart.php?id=<?= $NFTs->id ?>" class="add-button">Add To Cart</a>

                    </div>
                </div>
            </div>

        </div>
         </div>

       

    </div>
    
<?php include "parts/footer.php"; ?>

</body>
</html>
