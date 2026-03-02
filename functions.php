<?php

/**
 * Connect to the database
*/

function queryDB($query){
    //Connect to sqlite file
    $db = new PDO('sqlite:Tools/EventEase');

    //Prepare my query - stops SQL injection attempts
    $query = $db->prepare($query);

    //Run the queryDB
    $query->execute();

    //Get the data from the query
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

/**
 * Get events from the database
*/
function eventGet() {
    return queryDB("SELECT * FROM tblEvents
    INNER JOIN tblVenues ON tblEvents.VenueID = tblVenues.venueID;");

}


/**
 * Get event details from the database
 */

    function eventGetDetails($id) {
        return queryDB("SELECT * FROM tblEvents
        INNER JOIN tblVenues ON tblEvents.VenueID = tblVenues.venueID
        WHERE eventID = $id;");
    }

/**
 * Make Booking
*/
function makeBooking($event_id, $firstName, $lastName, $email, $phone, $tickets, $seating){

    // Check current seat availability by querying booked seats and venue capacity
    // Counts all currently booked seats and retrieves the total capacity of the venue
    $seatCheck = queryDB("SELECT (SELECT COUNT(*) FROM tblBookings B
    INNER JOIN tblBookedSeats BS ON B.bookingID = BS.bookingID
    WHERE B.showingID = 1) AS booked,
    (SELECT capacity FROM tblShowings S
    INNER JOIN tblVenues V ON S.venueID = V.venueID
    WHERE S.showingID = 1) AS capacity");

    // Check if venue has any available seats
    if($seatCheck[0]['booked'] < $seatCheck[0]['capacity']){
        // Verify the requested number of tickets doesn't exceed available seats
        if ($tickets > ($seatCheck[0]['capacity'] - $seatCheck[0]['booked'])){
            // Not enough seats available - redirect user to error page
            echo "Not enough seats available for the number of tickets.";
            header("Location: booking_failed.php?error=not_enough_seats");
            exit();
        }else{
            // Insert new booking record with customer information and ticket quantity
            queryDB("INSERT INTO tblBookings (showingID, firstName, lastName, email, phone, tickets) VALUES ($event_id, '$firstName', '$lastName', '$email', '$phone', $tickets);");
            
            // Retrieve the ID of the newly created booking for seat reservations
            $bookingID = queryDB("SELECT bookingID FROM tblBookings ORDER BY bookingID DESC LIMIT 1;")[0]['bookingID'];
            
            // Loop through each ticket and create individual seat reservations
            for($i = 0; $i < $tickets; $i++){
                queryDB("INSERT INTO tblBookedSeats (bookingID, seatNumber) VALUES ($bookingID, '$seating');");
            }
            echo "Booking successful!";
            
        }
        

    }

    else{
        // Venue is at full capacity - redirect user to error page
        echo "No seats available for this event.";
        header("Location: booking_failed.php?error=no_seats_available");

        
    }
}