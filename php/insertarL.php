<?php
// Connection parameters
$host = "localhost";
$username = "escritorio";
$password = "ninguna";
$database = "world";
// Establishing the connection
$conn = mysqli_connect($host, $username, $password, $database);
// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// SQL query to retrieve data
$sql = "INSERT INTO countrylanguage (CountryCode, Language, IsOfficial ) VALUES ('".$_GET["CountryCode"] ."','". $_GET["Language"]."','".$_GET["IsOfficial"]."')";

echo $sql;
// Executing the query and storing the result
$result = mysqli_query($conn, $sql);
// Checking if the query was successful
//if (mysqli_num_rows($result) > 0) {
    // Outputting the data
    //while ($row = mysqli_fetch_assoc($result)) {

    //}
//} else {
    //echo "0 results";
//}
// Close the connection
mysqli_close($conn);
?>