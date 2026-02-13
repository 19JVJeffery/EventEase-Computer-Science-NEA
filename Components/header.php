<?php
  require_once(__DIR__ . '/../functions.php');
  
?>


<!--Header Navigation Component (header.php)-->
<div class="menuWrapper">
    <div class="menu">
      <!-- Logo/Brand section linking to homepage -->
      <div class="menuImage">
        <a class="menuTitle" href="index.php">
          EventEase
        </a>
      </div>
      
      <!-- Main navigation links -->
      <ul>
        <!-- Home page link -->
        <li><a href="index.php">Home</a></li>
        
        <!-- Events listing page link -->
        <li><a href="/events.php">Events</a></li>
        
        <!-- Contact form page link -->
        <li><a href="/contact.php">Contact</a></li>
        
        <!-- User login page link -->
        <li><a href="Auth/login.php">Login</a></li>
        
        <!-- User registration page link -->
        <li><a href="Auth/signup.php">Sign Up</a></li>
      </ul>
    </div>
</div>