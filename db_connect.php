<?php
//$conn = mysqli_init();
//
//// Set the SSL parameters
//$ca_cert = "/site/wwwroot/certs/DigiCertGlobalRootCA.crt.pem"; // Path to the CA certificate on Azure
//mysqli_ssl_set($conn, NULL, NULL, $ca_cert, NULL, NULL);
//
//$servername = "lucidojohncarlo.mysql.database.azure.com";
//$username = "lucidojohncarlo";
//$password = "Jhared123";
//$dbname = "budget_tracker";
//$port = 3306;
//
//if (!mysqli_real_connect($conn, $servername, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL)) {
//    die("Connection failed: " . mysqli_connect_error() . " (Error number: " . mysqli_connect_errno() . ")");
//}
//
//echo "Connected successfully using SSL";
//
////
 $servername ="localhost" ;
 $username = "root";
 $password = "";
 $dbname = "budget_tracker";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
////
//
//echo "Connected successfully using SSL";
//


// Initialize the MySQLi connection with SSL
//$db = mysqli_init();
//
//// Define the path to the SSL certificate
//$ssl_cert_path = _DIR_ . "/DigiCertGlobalRootCA.crt.pem";
//
//// Check if the SSL certificate file exists
//if (!file_exists($ssl_cert_path)) {
//    die("SSL certificate file not found: " . $ssl_cert_path);
//}
//
//// Set up SSL for the MySQL connection
//mysqli_ssl_set($db, NULL, NULL, $ssl_cert_path, NULL, NULL);
//
//// Establish the connection using SSL
//if (!mysqli_real_connect($db, "lucidojohncarlo.mysql.database.azure.com", "lucidojohncarlo", "Jhared123", "budget_tracker", 3306, NULL, MYSQLI_CLIENT_SSL)) {
//    die("Connection failed: " . mysqli_connect_error());
//}

// Check connection
//if (mysqli_connect_errno()) {
//    echo "Failed to connect to MySQL: " . mysqli_connect_error();
//    exit();
//}
//
//echo "Successfully connected to the database.";

// You can now use $conn for your database operations
?>