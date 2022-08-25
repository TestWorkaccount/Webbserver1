<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <title>session_test_2</title>
</head>
<body>
<h1> session_test_2.php-filen</h1>
    <?php echo "<p>Hej igen! <br> Detta är en ny sida ID-värdet på denna: " . session_id() . "</p>";
?>

</body>
</html>