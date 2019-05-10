<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 20-10-2018
 * Time: 11:37
 */


$servername = "localhost";
$username = "root";
$password = "";
$database2 = "socialwall_group";


if (isset($_SESSION['database']) && $_SESSION['database'] == '2'){
    $database = "socialwall_group";
}else{
    $database = "socialwall";
}


/*$servername = "localhost";
$username = "bloghsi1_social";
$password = "@yjue)ZA211";
$database = "bloghsi1_social";
$database1 = "bloghsi1_social_group";
*/

// Create connection
$db = new mysqli( $servername, $username, $password, $database );
$db2 = new mysqli( $servername, $username, $password, $database2 );

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($db2->connect_error) {
    die("Connection failed: " . $db2->connect_error);
}


include_once 'function.php';
//echo "Connected successfully";

//date_default_timezone_set('Asia/Kolkata');
date_default_timezone_set('Asia/Kolkata');

?>