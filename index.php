<!DOCTYPE html>
<html>
<body>


<?php 
    // Detta är rubriken för min for loop.
    echo "Min egna for loop<br>";

    // Nedan är variabeln för min for loop.
    $summa = 0;

    //Här skrivs loopen ut.
    for($i = 0; $i <= 100; $i++){
        echo $summa . " + " . $i;
        $summa += $i;
        echo " = " . $summa . "<br><br>";
    }

    // Detta är rubriken för while loopen
    echo "Min egna while loop<br>";

    // Nedan ser du variablerna som används i while loopen
    $summan = 0;
    $i = 0;

    // Och här skrivs while loopen ut.
    while ($i <= 100){
        echo $summan . " + " . $i . " + " . $summan += $i;
        echo "<br>";
        $i++;
    }
?>


</body>
</html>