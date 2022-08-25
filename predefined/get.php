<?php
if(empty($_GET)) {
    echo "<p>Du har inte skickat några parametrar till sidan</p>";
}

if(isset($_GET['hej'])) {
    echo "<p>Hej på dig själv!</p>";
}

if(isset($_GET['namn'])) {
    echo "<p>Ah, så ditt namn är '" . htmlentities($_GET['namn']) . "'. Mitt namn är Mumintrollet.</p>";
}

echo "<p>Allt innhåll i arrayen \$_GET:<br><pre>" . htmlentities(print_r($_GET, 1)) . "</pre>";
?>
<ul>
  <li><a href='?hej'>Säg hej</a></li>
  <li><a href='?namn'>Mitt namn är Marvin, vad heter du?</a></li>
  <li><a href='?blahaha=123&balhahaha=INteasfda&hej=hejsan&namn=Lina'>Säg hej och presentera dig!</a></li>
  <li><a href='?'>Skicka inga parametrar alls.</a></li>
</ul>