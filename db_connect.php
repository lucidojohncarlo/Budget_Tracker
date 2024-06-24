<?php
$conn = mysqli_init();

// Set the SSL parameters
$ca_cert = "DigiCertGlobalRootCA.crt.pem"; // Path to the CA certificate
mysqli_ssl_set($conn, NULL, NULL, $ca_cert, NULL, NULL);

$servername = "johncarlolucido.mysql.database.azure.com";
$username = "johncarlo";
$password = "Jhared123";
$dbname = "budget_tracker";
$port = 3306;

if (!mysqli_real_connect($conn, $servername, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully using SSL";

//$servername ="johncarlolucido.mysql.database.azure.com" ;
//$username = "johncarlo";
//$password = "Jhared123";
//$dbname = "budget_tracker";
//$ssl_ca = "C:\xampp\htdocs\Budget_Tracker\DigiCertGlobalRootCA.pem";
//
//
//// Create a new MySQLi object
//$conn = new mysqli();
//
//// Set the SSL CA certificate
//$conn->ssl_set(NULL, NULL, $ssl_ca, NULL, NULL);
//
//// Connect to the database
//$conn->real_connect($servername, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);

//
// $servername ="localhost" ;
// $username = "root";
// $password = "";
// $dbname = "budget_tracker";
//

echo "Connected successfully using SSL";

?>
