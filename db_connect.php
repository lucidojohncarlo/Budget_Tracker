<?php
$conn = mysqli_init();

// Set the SSL parameters
$ca_cert = "DigiCertGlobalRootCA.crt.pem"; // Path to the CA certificate
mysqli_ssl_set($conn, NULL, NULL, $ca_cert, NULL, NULL);

$servername = "lucidojohncarlo.mysql.database.azure.com";
$username = "lucidojohncarlo";
$password = "Jhared123";
$dbname = "budget_tracker";
$port = 3306;

if (!mysqli_real_connect($conn, $servername, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully using SSL";

//
// $servername ="localhost" ;
// $username = "root";
// $password = "";
// $dbname = "budget_tracker";
//

echo "Connected successfully using SSL";

?>
