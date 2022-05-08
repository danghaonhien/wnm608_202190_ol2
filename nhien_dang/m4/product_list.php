<?php
include_once "lib/css/php/functions.php";
include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
	<script src="lib/css/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script>
		query({type:'products_all'}).then(d=>{
			$(".productlist").html(listItemTemplate(d.result))
		});
	</script>
</head>

<body>
<?php include "parts/navbar.php"; ?>
	<div class="styleguidecontainer gapContainer">
		<div class="">
			<h2>NFTs</h2>
			<!-- <ul>
				<li><a href="product_item.php?id=1">Product One</a></li>
				<li><a href="product_item.php?id=2">Product Two</a></li>
				<li><a href="product_item.php?id=3">Product Three</a></li>
				<li><a href="product_item.php?id=4">Product Four</a></li>
			</ul> -->
			<br />
			<div class="form-control">
				<form class="hotdog light" id="product-search"> <input type="search" placeholder="Search Products"> </form>

			</div>
			<div class='productlist grid gap'></div>
		
	</div>

	<!-- Footer -->
	<?php include "parts/footer.php"; ?>

</body>

</html>