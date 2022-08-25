<?php
$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === true) {
    echo "Database created successfully";
}
else {
    "Error creating database: " . $conn->error;
}

?>