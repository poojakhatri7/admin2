<?php
// $servername = "localhost";
// $dbname = "ranjeetyadav_e_commerce"; 
// $username = "ranjeetyadav_ranjeetyadav_ecom";
// $password = "&Ey40iFgZiPO";

// // $servername = "localhost";
// // $username = "edugtvs_parlour_beautyparlour_us";
// // $password = "52gfdj@fid#fjHEKFDgfd#gdf5";
// // $dbname = "edugtvs_parlour_beautyparlour_demo_db";
// // $port = 3307;
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// date_default_timezone_set("Asia/Calcutta");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-commerce1";
$port = 3307;
$conn = mysqli_connect($servername, $username, $password, $dbname,$port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>