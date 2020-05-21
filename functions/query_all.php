<?php

function data_query($db_connect,$table) {
    
    $q = " SELECT * FROM ".$table;
    $r = mysqli_query( $db_connect, $q );
    $data = mysqli_fetch_assoc( $r );
    
    
    return $data;
    
    
}

?>
