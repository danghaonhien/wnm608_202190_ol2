<?php 

function productListTemplate($r,$o) {
	return $r.<<<HTML
	<div class="col-xs-12 col-md-4">
		<a href="product_item.php?id=$o->id">
			<figure class="figure product">
				<img src = "$o->thumbnail" />
				<figcaption>
					<div class="caption-body">
						<div>$o->name</div>
						<div>$o->price</div>
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
			<img src="$o->thumbnail">
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