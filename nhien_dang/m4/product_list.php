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
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<?php include "parts/meta.php"; ?>
	<script src="lib/css/js/functions.js"></script>
	<script src="js/product_list.js"></script>
	<script src="js/templates.js"></script>

	<!-- <script>
		query({type:'products_all'}).then(d=>{
			$(".productlist").html(listItemTemplate(d.result))
		});
	</script> -->
</head>

<body>
	<?php include "parts/navbar.php"; ?>
	<div class="styleguidecontainer gapContainer">
    <div class="card">
    <h2>Product List</h2>
        <div class="form-control">
            <form class="hotdog light" id="product-search">
                <input type="search" placeholder="Search Products...">
            </form>
        </div>
        <div class="form-control display-flex">
            <div class="flex-none filter-button">
                <button data-filter="category" data-value="" type="button" class="form-button">All</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="Common" type="button" class="form-button">Common</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="Rare" type="button" class="form-button">Rare</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="Very Rare" type="button" class="form-button">Very Rare</button>
            </div>
            <div class="flex-none">
                <button data-filter="category" data-value="Ultra Rare" type="button" class="form-button">Ultra Rare</button>
            </div>
            <div class="display-flex" style="margin-left: auto;">
            <div class="form-select">
                <select class="js-sort">
					<option value="1">Price Low to High</option>
                    <option value="2">Price Hight to Low</option>
					<option value="3">Rariry</option>
                </select>
            </div>
        </div>
            
        </div>


        <div class='productlist grid gap'></div>
    </div>
    </div>

		<!-- Footer -->
		<?php include "parts/footer.php"; ?>

</body>

</html>