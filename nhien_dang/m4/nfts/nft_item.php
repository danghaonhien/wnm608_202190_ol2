
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>
	<?php include "../parts/subMeta.php"; ?>
</head>
<body>
	
	<?php include "../parts/subNavbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>NFT Item</h2>

			<p>This is NFT # <?= $_GET['id'] ?></p>
		</div>
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