<?php
    session_start();
?>
<!doctype html>
<html>
<head>
<title>session_test_2-filen</title>
</head>

<body>
<h1>session_test_2.php-filen</h1>

<?php
if(isset($_SESSION["favcolor"])){
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
}

if(isset($_SESSION["favanimal"])) {
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
}
echo "<p>Hej! <br>ID-värdet på denna session: " . session_id() . "</p>";
?>
<br>
<a href="session_test_3.php" target="_blank">session_test_3.php-filen</a>

</body>
</html>