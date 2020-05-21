<?php

function data_setting_value( $db_connect, $id ) {

    $q = " SELECT * FROM settings WHERE id ='$id'";
    $r = mysqli_query( $db_connect, $q );
    $data = mysqli_fetch_assoc( $r );

    return $data;

}

function data_user( $db_connect, $id ) {
    $q = "SELECT * FROM users WHERE email = '$id'";
    $r = mysqli_query( $db_connect, $q );
    $data = mysqli_fetch_assoc( $r );
    return $data;
}

function data_page( $db_connect, $id ) {

    $q = " SELECT * FROM pages WHERE id ='$id'";
    $r = mysqli_query( $db_connect, $q );
    $data = mysqli_fetch_assoc( $r );

    return $data;

}

?>
