<?php
//Setup File
#database connection
include ('config/connection.php');

//Constants
define('D_TEMPLATE','template');


//Functions

include ('functions/data.php');
include ('functions/query_all.php');
include ('functions/nav_pages.php');
include ('functions/template_categories.php');


$debug = data_setting_value($db_connect,'debug-status');


$site_title = 'Heave Tech';

if(isset($_GET['page'])){         // Checks if value is passed through url
    $page_id = $_GET['page'];   // Set the page id to the value in the url
}else {
    $page_id = 1;               // Set the page id to the home to be the default
}

//we can retrieve any page id from the database using the function
$page = data_page($db_connect,$page_id);


?>
