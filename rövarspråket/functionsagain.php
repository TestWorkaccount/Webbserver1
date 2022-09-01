<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funktions Test</title>
    <?php
       // Det här är funktion med namnet hej
       function hej(){
           echo "hej";
       }
      
       function hej2( $text ){
           echo "hej " . $text;
       }

        // Funktion med referensparametrar
        // anropas med &
        function viktigFacktion(&$text)
        {
            $text = $text . " ???";
        }

        function viktigUtanOchTecken($text)
        {
            $text = $text . " ???";
        }

        function skrivUtLista($talArray)
        {
        // gör en foreach-loop
            foreach($talArray as $value)
            {
                echo $value . " ";
            }
        }

        function hej3( ){
            // func_num_args() tar reda på antal inparametrar
           $antal = func_num_args(); 
           echo "Antal inparametrar: " . $antal . "<br>";
           // func_get_args() hämtar parametrarna och lägger i en array
           $parameterLista = func_get_args();
           foreach($parameterLista as $value){
               echo $value . " ";
           }
           echo "<br>";
       }


    ?>
</head>
<body>
    <?php
       // här anropar vi funktionen med namnet hej
       hej();
       echo "<br>";
       hej2("Markus!");

       $text1 = "hej";
       $text2 = "då";
       viktigFacktion($text1);
       echo "<br>" . $text1;
       viktigUtanOchTecken($text2);
       echo "<br>" . $text2;

       $t = "Är det onsdag";
       viktigFacktion($t);
       echo "<br>" . $t;
       echo "<br>";
       $lista[0] = 21;
       $lista[1] = 31;
       $lista[2] = 41;
       $lista[3] = 51;
       skrivUtLista($lista);
       
       echo "<br>";

       hej3(1);
       hej3(1, 2, 3);
       hej3(1, 2, 3, 4, 5);

       hej(12, "4234e", "##", 234);


    ?>
</body>
</html>




