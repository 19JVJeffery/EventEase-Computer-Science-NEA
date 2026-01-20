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
      <div class="bodyBackground">
    <div class="contactCard">
      <h1 style="text-align: center;">Contact Us</h1>
      <form method="post" action="#">
        
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required />
        
        <br><br>

        <label for="email">Email Address:</label>
        <input type="email" id="id" name="email" required />
        
        <br><br>

        <label for="message">Message:</label>
        <br>
        <textarea id="message" name="message" rows="4" required></textarea>

        <br><br>

        <button type="submit" class="glass-button">Send Message</button>
        
      </form>
      
      <br>
      <p>Please fill out the form above to get in touch with our team.</p>
    </div>
  </div>
    </div>

</div>
  <!--Footer-->
  <div class="footerWrapper" >
    <?php include("Components/footer.php") ?>
  </div>
</body>
</html>