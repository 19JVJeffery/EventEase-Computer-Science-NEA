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
