<?php
//<!-- ========================================
//     Event Card Component (event-card.php)
//     Reusable event display card with details
//     and add-to-cart functionality
//     ======================================== -->
    
function eventCard($id, $name, $venue, $price, $stock) {

$card = 
'<div class="eventsCard">
    <!-- Clickable link to event detail page -->
    <a href="event-view.php?id='. $id.'" class="cardLink">
        <!-- Event title with rounded top corners -->
        <div class="cardTitle" style="border-radius: 15px 15px 0px 0px;"><?= $name ?></div>
        
        <!-- Image wrapper container -->
        <div class="cardImageWrapper">
            <!-- Event image loaded dynamically based on ID -->
            <img
                class="cardImage"
                src="/Images/Products/'. $id .'.png"
                alt="'.htmlspecialchars($name).'"
            >
        </div>
        
        <!-- Venue information -->
        <div class="cardContent" style="text-decoration: none;">
            '. $venue .'
        </div>
    </a>
    
    <!-- Stock availability status -->
    <div class="cardContent">
        Stock: '. $stock .'
    </div>
    
    <!-- Event price with rounded bottom corners -->
    <div class="cardPrice" style="border-radius: 0px 0px 15px 15px;">
        &pound;'. number_format($price, 2) .'
    </div>
</div>';

            return $card;
}
?>