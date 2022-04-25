<?php

include_once "lib/css/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(), "SELECT * FROM `NFTs` WHERE `id` IN (1,2,3)");


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
		<h2>In Your Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart, 'cartListTemplate') ?>
				</div>

			</div>


			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;670</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">&dollar;50</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;720</div>
					</div>
					<div class="card-section">
						<a href="product_checkout.php" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php"; ?>

</body>

</html>