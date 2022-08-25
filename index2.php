<!DOCTYPE html>
<html>
<body>

<a href="exempelkod.php">exempelkoden</a>

<?php
    $variabelNamn = "Sträng";
    $heltal = 42;
    echo $variabelNamn;
    $summa = 0;
    for($i = 0; $i <= 100; $i++){
        echo $summa . " + " . $i;
        
        $summa += $i;

        echo " = " . $summa . "<br>";
        
    }
    for ($i=0; $i <= 100; $i++) { 
        # code...
    }
    
    echo "<br>" . $summa;
    
    
?> 

</body>
</html>