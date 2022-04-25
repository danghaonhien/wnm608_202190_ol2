<?php
            
include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
    return $r."<img src='img/$o'>";
}); 

// print_p($product);

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


    <div class="container">
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card ">
                    <div class="images-main">
                        <img src="img/<?= $product->thumbnail ?>">
                    </div>
                    <div class="images-thumbs">
                        <?= $image_elements ?>
                    </div>  
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card ">
                    <div class="card-section">
                        <h2 class="product-title"><?= $product->name ?></h2>
                        <div class="product-price">&dollar;<?= $product->price ?></div>
                    </div>

                    <div class="card-selection">
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
                         <label for="product-size" class="form-label">Size</label>
                        <div class="form-select" id="product-size">
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
                        <a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add To Cart</a>
                            <div class="card ">

                           <p> DETAILS:<?= $product->description ?></p>   

                    </div>
                </div>
            </div>

        </div>
         </div>

       

    </div>
    
<?php include "parts/footer.php"; ?>

</body>
</html>
