<!DOCTYPE html>
<html lang="en">
<head>

    <title>BauhausNFTs</title>
    <?php include "../parts/meta.php"; ?>
</head>
<body>
<?php include "../parts/navbar.php"; ?>
      <!-- Hero -->
      <section class="hero">
      <div class="hero-content">
        <h1 class="hero-title">Contact Page</h1>
<!-- Contact Form -->
<div class="styleguidecontainer">

      <div class="inputContainer card soft">
        <form action="action_page.php">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          <label for="lname">Email</label>
          <input type="text" id="email" name="Email" placeholder="johnDoe@johnDoe.com">
          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="vietnam">Vietnam</option>
            <option value="taiwan">Taiwan</option>
            <option value="usa">USA</option>
          </select>
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
          <input type="submit" value="Submit">
        </form>
      </div>

      </div>
    </section>
 <!-- Footer -->
 <?php include "../parts/footer.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="./js/scripts.js"></script>
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