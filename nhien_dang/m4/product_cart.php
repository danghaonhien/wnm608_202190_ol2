<?php


include_once "lib/css/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN(4,7,10)");


$cart_items = getCartItems();
$cart = getCart();


        ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

<?php include "parts/navbar.php"; ?>

<div class="styleguidecontainer  gapContainer">
	<h2>In Your Cart</h2>
	<?php
	if(count($cart)){
		?>
		<div class="grid gap">
		<div class="col-xs-12 col-md-8">
			<div class="card soft">
				<?= array_reduce($cart_items,'cartListTemplate') ?>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="card soft flat">
				<?= cartTotals() ?>
			</div>
			
		</div>
		
	</div>
	<?php
	} else{
?>
<div class="card soft gapContainer">
<p>	No items in cart </p> </div>
<h2>Other Recommendations </h2>
<div class="gapContainer">
<?php recommendedAnything(6); ?>
	</div>

<?php
	}
?>
</div>

</body>
</html> 