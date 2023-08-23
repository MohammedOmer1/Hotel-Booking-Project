<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytest_db";

// getting data and inserting into table
//if ($_SERVER["REQUEST_METHOD"] == "POST"){
$cust_id =$_POST["cust_id"];
$cust_name = $_POST["cust_name"];
$age= $_POST["age"];

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
/*$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo("good to go");
}
*/
$sql = "INSERT INTO `test` (`cust_id`, `cust_name`, `age`) VALUES ('$cust_id', '$cust_name', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


// Create connection

$conn->close();
?>