<?php

include_once "lib/css/php/functions.php";

$NFTs = makeQuery(makeConn(),"SELECT * FROM `NFTs` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Added To Cart</title>
    <?php include "parts/meta.php"; ?>
    <?php include "parts/navbar.php"; ?>
    
</head>
<body>
	


<div class="styleguidecontainer gapContainer">
	<div class="card soft">
		<h2>You added NFT: <?= $NFTs->name ?> to your cart</h2>
		<p>There are now <?= $cart_product->amount ?> of <?= $NFTs->name ?> in your cart.</p>
	<div class="display-flex productLink">
		<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
		<div class="flex-stretch"></div>
		<div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>
	</div>
	</div>
</div>
	<!-- Footer -->
	<?php include "parts/footer.php"; ?>
</body>
</html>
