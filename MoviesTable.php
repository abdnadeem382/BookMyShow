<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "BookMyShow");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Movies (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
poster VARCHAR(1000) NOT NULL,
movie_name VARCHAR(30) NOT NULL,
timings VARCHAR(500) NOT NULL,
cast VARCHAR(1000),
synopsis VARCHAR(1000),
seats VARCHAR(2000)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Movies created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>