<!--Start of my HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles.css">
  <title>EventEase - Easily book your live events</title>
</head>
<body>
  <?php include("Components/header.php") ?>

  <div class="bodyBackground">
    <div class="cardsContainer">
      <!-- Iterative PHP-->
      <?php
        require_once("event-card.php");
        $events = eventGet();
        print_r($events); // For debugging purposes

        for($i = 0; $i < count($events); $i++) {
          $id = $events[$i]['eventID'];
          $name = $events[$i]['eventName'];
          $venue = $events[$i]['venueName'];
          $price = 0;
          $stock = 0;

          echo eventCard($id, $name, $venue, $price, $stock);
        }
      ?>

      
  </div>
  <!--Footer-->
  <div class="footerWrapper">
    <?php include("Components/footer.php") ?>
  </div>
</body>
</html>