
const listItemTemplate = templater(o => `
<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">
     <figure class="figure product">
        <img src="img/${o.thumbnail}" alt="">
            <figcaption>
                <div><strong>${o.name}</strong></div>
                <div><strong>${o.category}</strong></div>
                <div>${o.price} ETH</div>
            </figcaption>
    </figure>
</a>
`);