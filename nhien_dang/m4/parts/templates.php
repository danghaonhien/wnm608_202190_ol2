<?php 

function productListTemplate($r,$o) {
	return $r.<<<HTML
	<div class="col-xs-12 col-md-4">
		<a class="cardImage" href="product_item.php?id=$o->id">
			<figure class="figure card soft">
				<img src = "img/$o->thumbnail" />
				<figcaption>
					<div class="caption-body">
						<div>$o->name</div>
						<div>$o->price ETH</div>
					</div>
				</figcaption>
			</figure>
		</a>
	</div>
	HTML;
}



function cartListTemplate($r,$o) {
	return $r.<<<HTML
	<div class="display-flex">
		<div class="flex-none images-thumbs">
			<img src="img/$o->thumbnail">
		</div>
		<div class="flex-stretch">
			<strong>$o->name</strong>
			<div>Delete</div>
		</div>
		<div class="flex-none">
			&dollar;$o->price
		</div>
	</div>
	HTML;
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