<?php
$a = array();

$a[1] = 42;
$a['name'] = "Mumintrollet";

echo "<i>Här kommer ett felmeddelande med flit!</i>";
echo "<br>";
echo "Position 1 i arrayen innehåller " . $a[1]; 
echo "<br>";
echo "Position 0 i arrayen innehåller " . $a[0]; 
echo "<br>";

$a[(double)1.0] = "nyckeln är 1.0";
echo "<br>";echo "<br>";
echo "a[1] är $a[1] <br>";
echo "a[1.0] är {$a[(double)1.0]} <br>";
echo "<br>";
echo "<br>";
echo "<br>";

$a = array("1337", 42, 13.37, true, false, null);

echo "Position 1 i arrayen innehåller " . $a[1];

$a = array(
    'answer' => 42,
    'name' => "Mumintrollet",
    'elite' => 1337,
);

echo "Värdet som är kopplat till array-nyckeln 'name' är " . $a['name'];

echo "<br>";
echo "<br>";echo "<br>";echo "<br>";

echo "<pre>" . print_r($a, true) . "</pre>";
echo "<pre>" , var_dump($a) , "</pre>";

echo "<pre>" . "ek \n " . " ek " . " ek " , " ek " , " ek " , "</pre>";

?>