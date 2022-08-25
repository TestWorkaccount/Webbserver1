<?php

function add_person($conn, $firstname, $lastname, $email){

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('$firstname', '$lastname', '$email');";


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

?>