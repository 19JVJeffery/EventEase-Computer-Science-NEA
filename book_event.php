<?php 
include("functions.php");

// 1. Validate the ID from the URL
if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: events.php");
    exit();
}

$id = $_GET['id'];
$eventDetails = eventGetDetails($id);

if(count($eventDetails) == 0) {
    header("Location: events.php");
    exit();
}

$event = $eventDetails[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Book - <?php echo $event['eventName']; ?></title>
</head>
<body style="background-image: url('pexels-picjumbo-com-55570-196652.jpg'); background-size: cover;">
  <?php include("Components/header.php") ?>

  <div class="bodyBackground">
    <div class="cardsContainer">
        <div class="contactCard">
            <h1 style="text-align: center;">Event Booking</h1>
            <h3 style="text-align: center; color: #6A0DAD;"><?php echo $event['eventName']; ?></h3>
            <p style="text-align: center;">Venue: <?php echo $event['venueName']; ?></p>
            
            <hr style="border: 0.5px solid #E0E0E0; margin: 20px 0;">

            <form action="process_booking.php" method="POST">
                <input type="hidden" name="event_id" value="<?php echo $id; ?>">

                <label for="cust_name">Full Name:</label>
                <input type="text" id="cust_name" name="cust_name" placeholder="Enter your name" required>
                
                <br><br>

                <label for="cust_email">Email Address:</label>
                <input type="email" id="cust_email" name="cust_email" placeholder="Enter your email" required>

                <br><br>

                <div style="display: flex; gap: 20px;">
                    <div style="flex: 1;">
                        <label for="tickets">Tickets:</label>
                        <input type="number" id="tickets" name="tickets" min="1" max="10" value="1" required>
                    </div>
                    <div style="flex: 2;">
                        <label for="seating">Seating Area:</label>
                        <select name="seating" id="seating" style="width: 100%; padding: 12px; border-radius: 10px; border: 1px solid #ccc; margin-top: 5px;">
                            <option value="General">General Admission</option>
                            <option value="Front Row">Front Row</option>
                            <option value="Balcony">Balcony</option>
                            <option value="VIP">VIP Lounge</option>
                        </select>
                    </div>
                </div>

                <br><br>

                <div style="text-align: center;">
                    <button type="submit" name="submit_booking" class="glass-button">Confirm Booking</button>
                </div>
            </form>
        </div>
    </div>
  </div>

  <div class="footerWrapper">
    <?php include("Components/footer.php") ?>
  </div>
</body>
</html>