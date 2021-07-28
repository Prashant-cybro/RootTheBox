<?php 

$server = "localhost";
$username = "cybro";
$password = "hackservos";
$database = "owasp_db";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>
