<?php 
    session_start();
?>
<!doctype html>
<html>
    <head>
    <title>session_test_1</title>
    </head>
 
    <body>
        <h1>session_test_1.php-filen</h1>
    <?php 
        //set session variabler
        $_SESSION["exist"] = "true";
        $_SESSION["favcolor"] = "blå";
        $_SESSION["favanimal"] = "delfin";
        echo "Session varaibles are set.";
        echo "<p>Hej! <br>ID-värdet på denna session: " . session_id() . "</p>";
    ?>
    <a href="session_test_2.php" target="_blank">session_test_2.php</a>    
</body>
</html>