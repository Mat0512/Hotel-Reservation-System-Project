<?php
    include 'db_queries.php';
    include 'database_conn.php';

    if(!isset($_POST)) {
        echo "error fetching.";
    
    }
    else {
        echo json_encode(
                        match_room($_POST["arrival_date"], 
                                    $_POST["departure_date"], 
                                    $_POST["adult_count"], 
                                    $_POST["child_count"])
                        );
    }

    
    