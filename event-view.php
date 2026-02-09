<?php

include("functions.php");

if(!isset($_GET['id'])) {
  header("Location: events.php");
  exit();
}
if(!is_numeric($_GET['id'])) {
  header("Location: events.php");
  exit();
}
$id = $_GET['id'];

$eventDetails = eventGetDetails($id);

if(count($eventDetails) == 0) {
  header("Location: events.php");
  exit();
}

?>

<!-- Start of my HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles.css">
  <title>EventEase - Easily book your live events</title>
</head>
<body>
  <?php include("Components/header.php") ?>

  <div class="bodyBackground">
    <div class="event-page-container">
      <div class="event-header-banner">
        <a href="javascript:history.back()" class="glass-button return-btn">Return</a>
        <h1 class="eventview-title"><?php echo $eventDetails[0]['eventName']; ?></h1>
      </div>

      <div class="event-main-content">
        <div class="event-left-col">
          <div class="event-cover-wrapper">
            <img src="<?php echo !empty($eventDetails[0]['imagePath']) ? $eventDetails[0]['imagePath'] : 'placeholder.jpg'; ?>" alt="Event Cover" class="event-cover-image">
            <div class="cover-overlay-text">COVER IMAGE</div>
          </div>

          <div class="event-description-card">
            <h3>Description</h3>
            <div class="description-inner">
              <p class="eventview-description">
                <?php echo $eventDetails[0]['eventDescription']; ?>
              </p>
            </div>
          </div>
        </div>

        <div class="event-info-sidebar">
          <div class="info-card">
            <h3>Info</h3>

            <div class="info-item">
              <div class="info-icon">🏢</div>
              <div>
                <strong>Venue</strong>
                <p class="eventview-venue"><?php echo $eventDetails[0]['venueName']; ?></p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">📅</div>
              <div>
                <strong>Date and Time</strong>
                <p><?php echo $eventDetails[0]['eventDate'] ?? 'TBC'; ?></p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">📍</div>
              <div>
                <strong>Address</strong>
                <p class="eventaddress">
                  <?php
                  echo $eventDetails[0]['addressLine1'];
                  echo "<br>";
                  if(!empty($eventDetails[0]['addressLine2'])) echo $eventDetails[0]['addressLine2'] . ", ";
                  echo $eventDetails[0]['town'];
                  echo "<br>";
                  echo $eventDetails[0]['postcode'];
                  ?>
                </p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">💰</div>
              <div>
                <strong>Refund Policy</strong>
                <p><?php echo $eventDetails[0]['refundPolicy'] ?? 'Standard policy applies'; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="book_event.php?id=<?php echo $id; ?>" class="animated-button book-now-btn" style = "text-align: center;"><span>Book now</span></a>
    </div>
  </div>

  <!-- Footer -->
  <div class="footerWrapper">
    <?php include("Components/footer.php") ?>
  </div>
</body>
</html>