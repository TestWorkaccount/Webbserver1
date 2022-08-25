<p>for loop</p>
<?php

$start = 1;
$end = 100;

$sum = 0;
for ($i = $start; $i <= $end; $i++) {
    $sum += $i;
    echo "". $sum;
    echo ", ";
}

echo "<br>Summa från " . $start . " till " . $end . " = " . $sum;

?>

<br/>
<br/>
<br/>
<br/>


<p>while loop</p>

<?php
$start = 0;
$end = 100;
$sum = 0;
while($start < $end){
    $sum += ++$start;
    echo ''.$sum;
    echo ", ";
  }
  
  echo "<b<br><br> Summar från " . "1 " . "till " . $end . "= ".  $sum;
?>