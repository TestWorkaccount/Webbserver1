<?php
echo "<p>Hur många tecken finns det i strängen 'Mumintrollet'? Svar: " . strlen('Mumintrollet') . "</p>";
echo "<p>Är strängen 'Hello' samma som 'hello'? Svar: </p>";
var_dump(strcmp('Hello', 'hello'));

echo "<p>Koda strängen 'moped' enligt ROT13: " . str_rot13('moped') . "</p>";
echo "<p>Hur ser en md5-hash av strängen 'MegaMic' ut? Svar: " . md5('MegaMic') . "</p>";
$megamik = "MegaMik";
echo "<p>Hur ser en md5-hash av strängen '$megamik' ut? Svar: " . md5($megamik) . "</p>";
?>