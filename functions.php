<?php

/**
 * Connect to the database
*/

function queryDB($query){
    //Connect to sqlite file
    $db = new PDO('sqlite:Tools/EventEase.db');

    //Prepare my query - stops SQL injection attempts
    $query = $db->prepare($query);

    //Run the queryDB
    $query->execute();

    //Get the data from the query
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

?>