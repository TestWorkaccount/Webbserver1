<?php
// require("connect.php");
// include("deletedatabase.php");
require("connect.php");
// require("createdb.php");
// require("createtable.php");

// require("additem.php");
// require("deleteuser.php");


// $field1 = isset($_POST['field1']) ? htmlentities($_POST['field1']) : null;

$förnamn = isset($_POST['fnamn']) ? htmlspecialchars($_POST['fnamn']) : null;
$efternamn = isset($_POST['enamn']) ? htmlspecialchars($_POST['enamn']) : null;
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
// $telefonnummer = isset($_POST['number']) ? htmlspecialchars($_POST['number']) : null;

$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);

if($förnamn && $efternamn && $email)
{

    require("addperson.php");
    add_person($conn, $förnamn, $efternamn, $email);
}

require("update.php");
update_person($conn, 6, "firstname", "mariann" );

$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
//   } else {
//     echo "0 results";
//   }

// include("deletedatabase.php");
$conn->close();
?>

<form method="POST">
    <label>Förnamn</label>
    <input type="text" name="fnamn">
    <br>
    <label>Efternamn</label>
    <input type="text" name="enamn">
    <br>
    <label>Email</label>
    <input type="email" name="email">
    <input type="submit">
    <!-- <input type="number"> -->
</form>

<table border=1>
    <tr>
        <th>id</th>
        <th>Namn</th>
        <th>Efternamn</th>
        <th>Email</th>
        <!-- <th>Mobil</th> -->
    </tr>
    <?php
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>1" . $row["id"] . "</td>";
            echo "<td>1" . $row["firstname"] . "</td>";
            echo "<td>1" . $row["lastname"] . "</td>";
            echo "<td>1" . $row["email"] . "</td>";
            echo "</tr>";
        }
    ?>

</table>
