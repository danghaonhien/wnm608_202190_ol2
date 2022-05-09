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
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

	<!-- <script>
		query({type:'products_all'}).then(d=>{
			$(".productlist").html(listItemTemplate(d.result))
		});
	</script> -->
</head>

<body>
	<?php include "parts/navbar.php"; ?>
	<div class="styleguidecontainer gapContainer">
		<div class="">
			<h2>NFTs</h2>
			<br />
			<div class="form-control">
				<form class="hotdog " id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>



			<div class="form-control">
				<div class="card">
					<div class="flex-stretch">

						<!-- <div class="flex-stretch display-inline-flex"> -->


						<div class="flex-none">
							<button data-filter="category" data-value="" type="button" class="form-button">All</button>
						</div>
						<!-- <div class="flex-none">
                                <button data-filter="category" data-value="women" type="button" class="form-button">WOMEN</button>
                            </div>
                              <div class="flex-none">
                                <button data-filter="category" data-value="men" type="button" class="form-button">MEN</button>
                            </div> -->
						<!-- </div>   -->


						<div class="flex-none">
							<div class="form-select">
								<select class="js-sort">
									<option value="1">PRICE LOW TO HIGH </option>
									<option value="2">PRICE HIGH TO LOW</option>

								</select>
							</div>
						</div>
					</div>

				</div>

			</div>



			<div class='productlist grid gap'></div>
		</div>

		<!-- Footer -->
		<?php include "parts/footer.php"; ?>

</body>

</html>