<?php
setcookie("testcookie", "Här finns det kakor",time()+300, "/", "", false, false);
?>
<!doctype html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title>cookie_test_1</title>
    </head>

    <body>
        <?php
            if(isset($_COOKIE['testcookie'])) {
                echo "<p> Hej igen, cookievärdet är " . $_COOKIE['testcookie'] . ".</p>";
            }
            else{
                echo "<p>Hej! Första besöket! Uppdatera så får du se cookisen!</p>";
            }
        ?>
        <br>
        <a href="deleteCookie.php">Ta bort cookies</a>

    </body>

</html>