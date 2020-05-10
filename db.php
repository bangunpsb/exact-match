<?php
// $localhost = "localhost";
// $username = "root";
// $password = "";
// $dbname = "latihan_cari";
// $con = new mysqli($localhost, $username, $password, $dbname);
$localhost = "sql12.freemysqlhosting.net";
$username = "sql12339208";
$password = "Cq28IFXY2W";
$dbname = "sql12339208";
$con = new mysqli($localhost, $username, $password, $dbname);
if ($con->connect_error) {
    die('Error: ' . $con->connect_error);
}
