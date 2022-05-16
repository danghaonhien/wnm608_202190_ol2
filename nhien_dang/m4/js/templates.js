const listItemTemplate = templater(
  (o) => `
<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">
<article id="" class="card soft">
          <div class="display-flex flex-align-center">
            <div class="flex-stretch">
              <h2>${o.name}</h2>
            </div>
            <div class="flex-none">
              <small>${o.category}</small>
            </div>
          </div>
          <dive class="article-body">
            <img class="cardImage" src="img/${o.thumbnail}" alt="" />
          </dive>
          <div class="item-grid display-flex flex-align-center">
            <div class="flex-stretch">
              <h3>Price</h3>
              <small>${o.price} ETH</small>
            </div>
          </div>
        </article>

</a>
`
);

//     <figure class="figure card soft">
//     <img src="img/${o.thumbnail}" alt="">
//         <figcaption>
//             <div><strong>${o.name}</strong></div>
//             <div><strong>${o.category}</strong></div>
//             <div>${o.price} ETH</div>
//         </figcaption>
// </figure>
