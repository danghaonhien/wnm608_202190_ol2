<?php

include_once "lib/css/php/functions.php";

$NFTs = makeQuery(makeConn(),"SELECT * FROM `NFTs` WHERE `id`=".$_GET['id'])[0];

// $cart_product = array_find(getCart(),function($o){return $o->id==$_GET['id'];});
		/* cartItemById($_GET['id']); doesn't work */
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Confirmation Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

<?php include "parts/navbar.php"; ?>

<div class="styleguidecontainer">
	<div class="card soft">
	<h2 class="title"><?= $NFTs->name ?> Added to Your Cart</h2>

		<div class="display-flex">
		<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
		<div class="flex-stretch"></div>
		<div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>
	</div>
	</div>
</div>

</body>
</html> 