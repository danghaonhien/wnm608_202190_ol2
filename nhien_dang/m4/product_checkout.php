<?php 
include_once "lib/css/php/functions.php";
include_once "parts/templates.php";
$cart = getCartItems();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <title>Checkout Page</title>
  <?php include "parts/meta.php"; ?>


</head>

<body>

  <?php include "parts/navbar.php"; ?>


  <div class="styleguidecontainer gapContainer">
	  <div class="grid gap">
		  <div class="col-xs-12 col-md-7">
			  <div class="card">
		      <h2>Product Checkout</h2>

	      	<h3>Address</h3>
		    	<form class="form">
				  	<div class="form-control">
					  	<label for="address-street" class="form-label">Street</label>
					  	<input id="address-street" type="text" placeholder="Street name" class="form-input">
				  	</div>
				  	<div class="form-control">
					  	<div class="grid gap">
						  	<div class="col-xs-12 col-md-6">
							  	<label for="address-city" class="form-label">City</label>
							  	<input id="address-city" type="text" placeholder="City" class="form-input">
						  	</div>
							  <div class="col-xs-12 col-md-6">
								<label for="address-state" class="form-label">State</label>
								<input id="address-state" type="text" placeholder="State" class="form-input">
						  	</div>
					  	</div>
				  	</div>
				  	<div class="form-control">
					  	<div class="grid gap">
						  	<div class="col-xs-12 col-md-6">
							  	<label for="address-zip" class="form-label">Zip Code</label>	
							  	<input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
						  	</div>

						  	<div class="col-xs-12 col-md-6">
							  	<label for="address-country" class="form-label">Country</label>	
							  	<input id="address-country" type="text" placeholder="Country" class="form-input">
						  	</div>
					  	</div>
			  		</div>

					<!-- <div class="form-control">
						<input type="submit" class="form-button" value="OK">
					</div> -->
		    	</form>

		      <h3>Payment</h3>
		    	<form class="form">
				  	<div class="form-control">
					  	<label class="form-label">Full Name</label>
					  	<input type="text" placeholder="Name" class="form-input">
				  	</div>
				  	<div class="form-control">
				  		<label class="form-label">Card Number</label>
					  	<input type="number" placeholder="####-####-####-####" class="form-input">
				  	</div>
					
				  	<div class="form-control display-flex flex-align-center">
					  	<div class="flex-none">
					  		<label class="form-label">Expiration</label>
					  	</div>
					  	<div class="flex-stretch">
						  	<input type="text" placeholder="MM-YY" class="form-input">
					    </div>
					    <div class="flex-none">
						  	<label class="form-label">CVV</label>
				  		</div>
					  	<div class="flex-stretch">
						  	<input type="text" placeholder="###" class="form-input">
					  	</div>
				  	</div>

				  	<div class="form-control">
					  	<label class="form-label">Zip Code</label>	
					  	<input type="number" placeholder="Zip Code" class="form-input">
				  	</div>

		
             <div class="form-control">
			      	<a href="product_cart.php" class="buy-button">Cancel</a>
			      	<a class="buy-button" href="product_confirmation.php">Complete Checkout</button></a>
		      	</div>
			  	</form>
	    	</div>
    	</div>


      <div class="col-xs-12 col-md-5">
      	<div class="card">
		      <h2>Item Review</h2>
		     <div class="card-section">
	        	<?= array_reduce($cart,function($r,$o){
		      	$totalfixed = number_format($o->total,2,'.','');
		      	return $r."<div class='display-flex'>
			    	<div class='flex-stretch'>$o->name</div>
			    	<div class='flex-none'>&dollar;$totalfixed</div>
		      	</div>";
	        	}) ?>
        	</div>
        	<?= cartTotals(); ?>
      	<div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include "parts/footer.php"; ?>

  </body>
  


</html>