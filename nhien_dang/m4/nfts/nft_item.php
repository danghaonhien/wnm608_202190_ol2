
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>
	<?php include "../parts/meta.php"; ?>
</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>
  <div class="nft-card-container">
  <article id="" class="card soft">
              <div class="display-flex flex-align-center">
                <div class="flex-stretch">
                  <h2>Bauhaus NFT</h2>
                </div>
                <div class="flex-none">
                  <small>No. <?= $_GET['id'] ?></small>
                </div>
              </div>

              <dive class="article-body">
                <img class="cardImageItem" src="../img/sunset.jpg" alt="" />
              </dive>
              <div class="item-grid display-flex flex-align-center">
                <div class="flex-stretch">
                  <h3>Price</h3>
                  <small
                    >0.08 <span><i class="fab fa-ethereum"></i></span
                  ></small>
                </div>
                <div class="flex-none">
                  <button type="button" class="buy-button">BUY NOW</button>
                </div>
              </div>
            </article>
            </div>


    <?php include "../parts/footer.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script>
      new Carousel({
        element: $(".carousel").eq(0),
        timing: 6000,
      });
    </script>
    <!--  -->
    <script>
      const navIcon = document.querySelector(".nav-icon");
      const nav = document.querySelector("nav");

      navIcon.onclick = function () {
        nav.classList.toggle("show");
      };
    </script>
</body>
</html>