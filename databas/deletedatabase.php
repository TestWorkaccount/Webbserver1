<?php


if ($conn->query("Drop DATABASE myDB")) {
    printf("Database myDB dropped successfully.<br />");
 }
 if ($conn->errno) {
    printf("Could not drop database: %s<br />", $mysqli->error);
 }

?>