<?php

$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE firstname='John'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>