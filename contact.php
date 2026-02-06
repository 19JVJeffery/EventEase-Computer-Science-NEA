<!-- ========================================
     EventEase - Contact Page (contact.php)
     Contact form for user inquiries
     ======================================== -->
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
  
  <!-- Main content area -->
  <div class="bodyBackground">
    <!-- Contact form container -->
    <div class="cardsContainer">
      <div class="bodyBackground">
        <!-- Contact card with form -->
        <div class="contactCard">
          <h1 style="text-align: center;">Contact Us</h1>
          
          <!-- Contact form with POST method -->
          <form method="post" action="#">
            <!-- Full Name input field -->
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required />
            
            <br><br>
            
            <!-- Email address input field -->
            <label for="email">Email Address:</label>
            <input type="email" id="id" name="email" required />
            
            <br><br>
            
            <!-- Message textarea for longer text input -->
            <label for="message">Message:</label>
            <br>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <br><br>
            
            <!-- Submit button with glass-style class -->
            <button type="submit" class="glass-button">Send Message</button>
          </form>
          
          <br>
          <!-- Helper text for form instructions -->
          <p>Please fill out the form above to get in touch with our team.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer section with copyright information -->
  <div class="footerWrapper">
    <?php include("Components/footer.php") ?>
  </div>
</body>
</html>