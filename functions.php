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

    $seatCheck = queryDB("SELECT (SELECT COUNT(*) FROM tblBookings B
    INNER JOIN tblBookedSeats BS ON B.bookingID = BS.bookingID
    WHERE B.showingID = 1) AS booked,
    (SELECT capacity FROM tblShowings S
    INNER JOIN tblVenues V ON S.venueID = V.venueID
    WHERE S.showingID = 1) AS capacity");

    if($seatCheck[0]['booked'] < $seatCheck[0]['capacity']){
        if ($tickets > ($seatCheck[0]['capacity'] - $seatCheck[0]['booked'])){
            echo "Not enough seats available for the number of tickets.";
            header("Location: booking_failed.php?error=not_enough_seats");
            exit();
        }else{
            queryDB("INSERT INTO tblBookings (showingID, firstName, lastName, email, phone, tickets) VALUES ($event_id, '$firstName', '$lastName', '$email', '$phone', $tickets);");
            $bookingID = queryDB("SELECT bookingID FROM tblBookings ORDER BY bookingID DESC LIMIT 1;")[0]['bookingID'];
            for($i = 0; $i < $tickets; $i++){
                queryDB("INSERT INTO tblBookedSeats (bookingID, seatNumber) VALUES ($bookingID, '$seating');");
            }
            echo "Booking successful!";
            
        }
        

    }

    else{
        echo "No seats available for this event.";
        header("Location: booking_failed.php?error=no_seats_available");

        
    }
}