<?php
setcookie("kakTest", "Här finns det kakor",time()+300, "/", "", false, 0);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CookieTest2.php</title>
</head>
 
<body>
 <h1> CookieTest2.php </h1>
<?php 
if (isset($_COOKIE['kakTest'])) {
    echo "Cookie innehåller " . $_COOKIE['kakTest'];
} 
?>
 
</body>
</html>
