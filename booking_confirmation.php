<?php 
include("functions.php");

// Check if booking was just made (redirect parameter)
$bookingJustMade = isset($_GET['success']) && $_GET['success'] == 'true';

// Get booking details from session or database
$booking = null;
if($bookingJustMade && isset($_SESSION['last_booking'])) {
    $booking = $_SESSION['last_booking'];
    unset($_SESSION['last_booking']);
} else if(isset($_GET['booking_id']) && is_numeric($_GET['booking_id'])) {
    // Optionally retrieve booking from database using booking ID
    $booking = getBookingDetails($_GET['booking_id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Booking Confirmation</title>
</head>
<body style="background-image: url('pexels-picjumbo-com-55570-196652.jpg'); background-size: cover;">
  <?php include("Components/header.php") ?>

  <div class="bodyBackground">
    <div class="cardsContainer">
        <div class="contactCard">
            <h1 style="text-align: center;">✓ Booking Confirmed</h1>
            <p style="text-align: center; color: #6A0DAD; font-size: 18px;">Thank you for your booking!</p>
            
            <hr style="border: 0.5px solid #E0E0E0; margin: 20px 0;">

            <?php if($booking): ?>
                <div style="background-color: #f9f9f9; padding: 20px; border-radius: 10px; margin: 20px 0;">
                    <h3 style="color: #6A0DAD; margin-bottom: 15px;">Booking Details</h3>
                    
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($booking['firstName'] . ' ' . $booking['lastName']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($booking['email']); ?></p>
                    <p><strong>Phone:</strong> <?php echo htmlspecialchars($booking['phone']); ?></p>
                    
                    <hr style="border: 0.5px solid #E0E0E0; margin: 15px 0;">
                    
                    <p><strong>Tickets:</strong> <?php echo htmlspecialchars($booking['tickets']); ?></p>
                    <p><strong>Seating Type:</strong> <?php echo htmlspecialchars($booking['seating']); ?></p>
                </div>
            <?php else: ?>
                <p style="text-align: center; margin: 20px 0;">Your booking has been successfully registered.</p>
            <?php endif; ?>

            <p style="text-align: center; color: #666; margin: 20px 0; font-size: 14px;">Your booking ID is <strong><?php echo htmlspecialchars($booking['bookingID']); ?></strong>. Please keep it safe for check-in.</p>

            <hr style="border: 0.5px solid #E0E0E0; margin: 20px 0;">

            <div style="text-align: center;">
                <a href="events.php" class="glass-button" style="display: inline-block; padding: 12px 30px; text-decoration: none;">Back to Events</a>
            </div>
        </div>
    </div>
  </div>

  <div class="footerWrapper">
    <?php include("Components/footer.php") ?>
  </div>
</body>
</html>