<?php
    function validate_search_data($post) {
        if (!$post["date_arrival"] 
            || !$post["date_departure"] 
            || !$post["adult_count"] 
            || !$post["children_count"]) 
            { return false; }

        return true;
    }

    function validate_reservation_data() {
        return 0;
    }

    function check_date_range() {

    }

    function evaluate_date($date_start, $date_end) {
        // use regexx to extract mm and yyyy then convert to integer
        $date_start_yyyy = "";
        $date_end_yyyy = "";
        $date_start_mm = "";
        $date_end_mm = "";

        if(!$date_start_yyyy < $date_end_yyyy
           || !$date_start_yyyy == $date_end_yyyy
            && !$date_start_mm < $date_end_mm) 
            { return false; }
        
        return true;
    } 




