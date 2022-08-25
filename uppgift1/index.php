<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //For loop
    $x=0;
    for($i=0; $i<=100; $i++){
        $x=$x+$i;
    }
    echo "Summan blir: $x <br>";

    ?>

    <?php //While loop
    $y=0;
    $a=0;
    while($a<=100){        
        $y=$y+$a++;      
    }
    echo "Summan blir: $y";
    ?> 

</body>
</html>