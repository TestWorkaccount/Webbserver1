<?php
if(isset($_COOKIE['testcounter'])){
    $nummer = (int)$_COOKIE['testcounter'];
    $nummer++;
    setcookie("testcounter", $nummer,time()+300, "/", "", false, false);
}
else{
    setcookie("testcounter", 1,time()+300, "/", "", false, false);
}
?>
<!doctype html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title>cookie_counter</title>
    </head>

    <body>
        <?php
            if(isset($_COOKIE['testcounter'])) {
                echo "<p> Hej igen, du har besökt sidan " . $_COOKIE['testcounter'] . " gånger förut.</p>";
            }
            else{
                echo "<p>Hej! Första besöket!</p>";
            }
        ?>
        <br>
        <a href="deleteCookie2.php">Ta bort counter cookies</a>

    </body>

</html>