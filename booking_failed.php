<?php 
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Booking Failed</title>
</head>
<body style="background-image: url('pexels-picjumbo-com-55570-196652.jpg'); background-size: cover;">
  <?php include("Components/header.php") ?>

  <div class="bodyBackground">
    <div class="cardsContainer">
        <div class="contactCard">
            <h1>✗ Booking Failed</h1>
            <p>We're sorry, but your booking could not be completed.</p>
            
            <div class="event-description-card">
                <h3>What went wrong?</h3>
                <p>There was an error processing your booking. This could be due to:</p>
                <ul>
                    <li>The event may be fully booked</li>
                    <li>Technical difficulties with the payment system</li>
                    <li>Connection issues during submission</li>
                    <li>Invalid booking information</li>
                </ul>
            </div>

            <br>

            <div class="event-description-card">
                <h3>What can you do?</h3>
                <ul>
                    <li>Try booking again in a few moments</li>
                    <li>Check if the event still has available tickets</li>
                    <li>Contact us if the problem persists</li>
                    <li>Verify your payment information</li>
                </ul>
            </div>

            <a href="events.php" class="glass-button">Back to Events</a>
            <a href="contact.php" class="glass-button">Contact Support</a>
        </div>
    </div>
  </div>

  <div class="footerWrapper">
    <?php include("Components/footer.php") ?>
  </div>
</body>
</html>