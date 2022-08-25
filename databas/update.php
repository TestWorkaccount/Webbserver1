<?php


function update_person($conn, $id, $column, $value ){

    $sql = "UPDATE MyGuests SET $column='$value' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

}
?>