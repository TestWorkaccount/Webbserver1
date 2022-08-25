<!<!DOCTYPE html>
<meta charset="utf-8">
<title>My test Page</title>
<h1>This is my test page for PHP</h1>

<p>



<?php

echo "Using For loop" ; 


    $x=1;
    $y=100;
    $summa=0;

for ($i=$x; $i <=$y ; $i++)

{
  $summa+=$i;
}


    echo "Summan från"." " .$x ."Till" .$y. "blir"."  ". $summa;
       ?>






<?php

echo "Using While loop" ; 


  $i=1;
  $y=100;

  $summa=0;

while ($i <= $y)

{
  $summa+=$i;
  $i++;


}

    echo "Summan från"."1 " ." " ."Till" .$y. "blir"."  ". $summa;
       ?>

</p>