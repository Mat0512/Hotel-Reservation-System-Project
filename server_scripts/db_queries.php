<?php
    include 'database_conn.php';
    
    // function used for querying guest's search room request
    function match_room($start_date, $end_date, $adult_count, $child_count) {
        GLOBAL $conn;
        $sql_template = "SELECT ra.availability_date AS date, r.room_name, r.beddings, r.room_size, r.max_adult_count, r.max_child_count, 
                                r.room_price
                         FROM room_availability AS ra
                         JOIN room r
                            ON ra.room_id = r.room_id
                         WHERE availability_date BETWEEN ? AND ?
                            AND ? = r.max_adult_count;";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql_template)) {
            return "Sql statement failed";
        } 

        mysqli_stmt_bind_param($stmt, 'ssi', $start_date, $end_date, $adult_count);
        mysqli_stmt_execute($stmt);
        $result =  mysqli_stmt_get_result($stmt);

        $result_array = array();
        while($row = mysqli_fetch_assoc($result)) {
            array_push($result_array, $row);
        }

        return $result_array;
    }

    //the reservation form data that is filled up and submitted will be stored on two tables (guest, reservation)
    function add_guest_record($guest_first_name, $guest_last_name, $guest_phone, $guest_email){
        GLOBAL $conn;
        $stmt = 'INSERT INTO guest(guest_fname, guest_lname, guest_phone, guest_email)
                 VALUES(?,?,?,?);';    
        
    }  
    //function used to return guest_id and then will be used as foreign key for inserting reservation record
    function get_guest_id($guest_phone, $guest_email){
        GLOBAL $conn;
        $stmt = 'SELECT guest_id 
                 FROM guest
                 WHERE guest_email = ? 
                    AND guest_phone = ?;';
    }
    //function used to return room_id and then will be used as foreign key for inserting reservation record
    function get_room_id($room_name){
        GLOBAL $conn;
        $stmt = 'SELECT room_id
                 FROM room
                 WHERE guest_email = ?';
    }
    
    function add_reservation_record($room_name, $arrival_date, $departure_date, 
                                   $adult_count, $child_count, $reservation_cost, $reservation_status_id = 1) {                                  
        GLOBAL $conn;
        $stmt = 'INSERT INTO reservation(guest_id, room_id, arrival_date, departure_date,  
                                         adult_count, child_count, reservation_cost, reservation_status_id)
                 VALUES(?,?,?,?,?,?,?,?);' ;
    }

