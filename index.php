<!--EventEase - Home Page (index.php)-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="styles.css">
    <title>EventEase - Easily book your live events</title>
</head>
<!-- Set background image with cover sizing for full-screen display -->
<body style="background-image: url('pexels-picjumbo-com-55570-196652.jpg'); background-size: cover;">
  <!-- Include reusable header component with navigation menu -->
  <?php include("Components/header.php") ?>
  
  <!-- Main content container with semi-transparent background -->
  <div class="homeBodyBackground">
    <!-- Welcome section - primary headline card -->
    <div class="cardsContainer">
      <div class="homeCard">
        <h2>Welcome to EventEase!</h2>
      </div>
    </div>
    
    <!-- Introduction section - platform description -->
    <div class="cardsContainer">
      <div class="card">
        <p>EventEase is a simple and reliable event ticket booking platform designed to make finding and booking events quick and stress-free.</p>
      </div>
    </div>
    
    <!-- Call-to-action button linking to events page -->
    <a href="events.php">
      <div align="center">
        <div class="animated-button" href="events.php">View Events</div>
      </div>
    </a>
  </div>
  
  <!-- Footer section with copyright information -->
  <div class="footerWrapper">
    <?php include("Components/footer.php") ?>
  </div>
</body>
</html>