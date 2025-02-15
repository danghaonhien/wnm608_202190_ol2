<?php 
function productListTemplate($r,$o) {
	return $r.<<<HTML
	<div class="col-xs-12 col-md-4">
		<a class="cardImage" href="product_item.php?id=$o->id">
			<figure class="figure card soft">
				<img src = "img/$o->thumbnail" />
				<figcaption>
					<div class="caption-body">
						<div><strong>$o->name</strong></div>
						<div>$o->price ETH</div>
						<div>$o->category </div>
					</div>
				</figcaption>
			</figure>
		</a>
	</div>
	HTML;
}
function accordionTemplate($r,$o) {
	return $r.<<<HTML
		<a class="cardImage" href="product_item.php?id=$o->id">
			<figure class="figure card soft">
				<img src = "img/$o->thumbnail" />
			</figure>
		</a>
	HTML;
}

function selectAmount($amount=1,$total=10) {
    $output = "<select name='amount'>";
    for($i=1;$i<=$total;$i++) {
        $output .= "<option ".($i==$amount?"selected":"").">$i</option>";
    }
    $output .= "</select>";
    return $output;
}


function cartListTemplate($r,$o){
	$totalfixed = number_format($o->total,2,'.','');
	$selectamount = selectAmount($o->amount,10);
		return $r.<<<HTML
		<div class="display-flex">
			<div class="flex-none images-thumbs">
				 <img src="img/$o->thumbnail">
			</div>
			<div class="flex-stretch">
			<div>	<strong>$o->name</strong> </div>
			<div>	<strong>$o->category</strong></div>
				<form action="cart_actions.php?action=delete-cart-item" method="post">
				<input type="hidden" name="id" value="$o->id">
				<input type="submit" class="form-button gapContainer" value="Delete" style="font-size: 0.7em;">
				</form>
			</div>
			<div class="flex-none">
				<div>$totalfixed ETH</div>
				<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
				 <input type="hidden" name="id" value="$o->id">
					<div class="form-select" style="font-size: 0.9em;">
						   $selectamount
						</div>
				</form>
			</div>
		</div>
		HTML;
	}
	
	
	
	function cartTotals() {
		$cart = getCartItems();
		$cartprice = array_reduce($cart, function($r,$o){return $r + $o->total;},0);
		$pricefixed = number_format($cartprice,2,'.','');
		$taxfixed = number_format($cartprice*0.0725,2,'.','');
		$taxedfixed = number_format($cartprice*1.0725,2,'.','');
	
		return <<<HTML
		<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">$pricefixed ETH</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">$taxfixed ETH</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">$taxedfixed ETH</div>
					</div>

	HTML;
	}
	
	
	
	function recommendedProducts($a) {
		$NFTs = array_reduce($a,'productListTemplate');
		echo <<<HTML
		<div class="productlist grid gap">$NFTs</div>
		HTML;
		}
		
		function recommendedCategory($cat,$limit=3) {
			$result = makeQuery(makeConn(),"SELECT * FROM `NFTs` WHERE `category`='$cat' ORDER BY `date_create` DESC LIMIT $limit");
			recommendedProducts($result);
		}
		
		function recommendedAnything($limit=3) {
			$result = makeQuery(makeConn(),"SELECT * FROM `NFTs` ORDER BY rand()  LIMIT $limit");
			recommendedProducts($result);
		}
		
		function recommendedSimilar($cat,$id=0,$limit=3) {
			$result = makeQuery(makeConn(),"SELECT * FROM `NFTs` WHERE `category`='$cat' AND `id`<>$id ORDER BY rand() LIMIT $limit");
			recommendedProducts($result);
		}


// <div class="col-xs-12 col-md-3">
// 		<a href="product_item.php?id=$o->id">
// 		<article id="" class="card soft">
//           <div class="display-flex flex-align-center">
//             <div class="flex-stretch">
//               <h2>$o->name</h2>
//             </div>
//             <div class="flex-none">
//               <small>No.01</small>
//             </div>
//           </div>

//           <dive class="article-body">
//             <img class="cardImage" src ="img/$o->thumbnail" alt="" />
//           </dive>
//           <div class="item-grid display-flex flex-align-center">
//             <div class="flex-stretch">
//               <h3>Price</h3>
//               <small>$o->price <span>eth</span></small>
//             </div>
//             <div class="flex-none">
//               <button type="button" class="buy-button">BUY NOW</button>
//             </div>
//           </div>
//         </article>
// 		</a>
// 	</div>