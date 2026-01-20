<!--Start of my HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <title>EventEase - Easily book your live events</title>
  </head>
<body style="background-image: url('pexels-picjumbo-com-55570-196652.jpg'); background-size: cover;">
  <?php include("Components/header.php") ?>
  <div class="homeBodyBackground">
    <div class="cardsContainer">
      <div class="homeCard">
        <h2>Welcome to EventEase!</h2>
      </div>
    </div>
    <div class="cardsContainer">
      <div class="card">
        <p>EventEase is a simple and reliable event ticket booking platform designed to make finding and booking events quick and stress-free.</p>
      </div>
    </div>
    <a href="events.php">
      <div align = "center">
          <div class="animated-button" href="events.php">View Events</div>
      </div>
    </a>
</div>
  <!--Footer-->
  <div class="footerWrapper" >
    <?php include("Components/footer.php") ?>
  </div>
</body>
</html>