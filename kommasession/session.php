<?php
session_name('php20guiden');
session_start();

$_SESSION['count2'] = 5;
$_SESSION['count3'] = 10;

if(isset($_SESSION['count'])) {
  $_SESSION['count']++;
}
else {
  $_SESSION['count'] = 0;
}

if(isset($_GET['reset'])) {
  $_SESSION['count'] = 0;
}

$str = "<p> här är det ren text </p>";

echo "<p>Allt innehåll i arrayen \$_SESSION:<br><pre>" . htmlentities(print_r($_SESSION, 1)) . "</pre>";
echo $str;
echo htmlentities($str);

foreach($_SESSION as $val){
    echo "<br>foreach-loop " . $val;
}


$str2 = print_r("tar emot", true);
echo "<br> " . $str2 . "<br>";
$str3 = print_r("tar inte emot", false);
 echo "<br> str3 " . $str3;
?>

<p><a href="?">Ladda om sidan och ökaa variabeln med ett</a> | <a href="?reset">Nollställl variabeln</a></p>