<?php
    session_start();
?>
<!doctype html>
<html>
<head>
<title>session_test_3.php</title>
</head>
<body>
    <h1> session_test_3.php-filen</h1>
    <?php
        if(isset($_SESSION["exist"])){
            session_unset();
            session_destroy();
            // session_regenerate_id();
            echo "Session är rensad och förstörd.<br>";
        }
        echo "<p>Hej! <br>ID-värdet på denna session: " . session_id() . "</p>";
    ?>
    <a href="session_test_2.php" target="_blank">session_test_2.php-filen</a>

</body>
</html>