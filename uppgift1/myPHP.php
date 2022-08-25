<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP</title>
</head>

<style>
    h3{text-align:center; border-style: dotted;}
    p{text-align:center; border-style: solid; width: 50px; margin:auto;}
</style>
<body>

<?php //We use this PHP code for the programming errors
    error_reporting(-1);              // Report all type of errors
    ini_set('display_errors', 1);     // Display all errors 
    ini_set('output_buffering', 0);   // Do not buffer outputs, write directly

    //Summera dem 100 första heltalen med for-loop.
    echo "<h3>For-loop med PHP!</h3>";
    $sum = 0;

    for ($i=1; $i <= 100; $i++) 
    { 
        $sum += $i;
    }

    echo "<p>$sum</p>";
    

    //Summer dem 100 första heltalen med while-loop
    echo "<h3>While-loop med PHP!</h3>";
    
    $a = 0;
    $sum = 0;

    while ($a < 100) 
    {
        $a++;
        $sum += $a;
    }
    
    echo "<p>$sum</p>";

 

?>
</body>
</html>