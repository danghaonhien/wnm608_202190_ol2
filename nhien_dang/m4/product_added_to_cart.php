<?php

include_once "lib/css/php/functions.php";

if (isset($_GET['id'])) {
	$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=" . $_GET['id'])[0];
	// print_p($product);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>
	<?php include "parts/navbar.php"; ?>

</head>

<body>


	<div class="styleguidecontainer">
		<div class="card soft">
			<h2>You added <?= $product->name ?> to your cart</h2>

			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>
			</div>
		</div>
	</div>



</body>

</html>