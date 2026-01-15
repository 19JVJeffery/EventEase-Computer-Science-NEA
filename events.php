<!--Start of my HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles.css">
  <title>EventEase - Easily book your live events</title>
</head>
<body style="background-image: url('pexels-picjumbo-com-55570-196652.jpg'); background-size: cover;">
  <?php include("Components/header.php") ?>

  <div class="bodyBackground">
    <div class="cardsContainer">

      <!-- Iterative PHP-->
      <a href="Product Pages/001.php" class="card">
        <div class="cardTitle">Strawberry Gummies</div>

        <div class="cardImageWrapper">
          <img
            class="cardImage"
            src="/Images/Products/001.png"
            alt="Strawberry Gummies"
          >
        </div>

        <div class="cardContent">
          Soft, chewy strawberry-flavoured gummies coated in sugar.
        </div>

        <div class="cardContent">
          Stock: In stock
        </div>

        <div class="cardPrice">
          &pound;2.49
        </div>

        <form method="post" action="">
          <input type="hidden" name="pid" value="001">

          <select name="qty" style="display: block; margin: 0 auto; margin-top: 10px;">

            <option value="">Qty</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <br>
          <button style="display: block; margin: 0 auto; margin-bottom: 10px;">Add to cart</button>
        </form>
      </a>

    </div>
  </div>
  <!--Footer-->
  <div class="footerWrapper">
    <?php include("Components/footer.php") ?>
  </div>
</body>
</html>