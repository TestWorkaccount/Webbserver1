<?php 
        // strlen  ger antal tecken i en text
        echo strlen("Markus")."<br>"; 
        // strtoupper omvandlar textsträngen till stora bokstäver (versaler)
        echo strtoupper("Markus")."<br>";
        // strtolower omvandlar textsträngen till små bokstäver (gemener)
        echo strtolower("MARKUS")."<br>";
        //strpos en delsträngs position i en sträng obs. börjar räkna på 0
        echo strpos("Markus", "rkus")."<br>";
        // str_replace byter ut en delsträng mot en annan
        // str_replace("byts ut", "byts till", "hela strängen");
        echo str_replace("world", "Markus", "Hello world")."<br>";
       // ucfirst() omvandlar första bokstaven till stora bokstav 
        // obs åäö påverkas inte 
        $text = "bjerregaard";
         echo ucfirst( $text )."<br>";
      // substr() tar ut en del sträng 
      // substr(texten, start [börjar på 1:a bokstaven], antal tecken)
         $nyText = substr( $text, 1, 5 );
        echo $nyText . "<br>";
?>

<?php
 
$text = "25/2 skickades ut kallelser från admin.stockholm@astar.se för kursstart 15/3 Kallelsen är skickad till den mailadress du angav vid ansökan. Det kan hända att kallelsen hamnar bland skräpposten – så ta en extra titt där!";
 
//wordwrap delar upp lång text på rader
// word wrap( text, antal bokstäver per rad, "<br />\n")
$nyText = wordwrap($text, 15, "<br />\n");
echo $nyText;


?>

<?php
 
$text = "25/2 skickades ut kallelser från admin.stockholm@astar.se för kursstart 15/3 Kallelsen är skickad till den mailadress du angav vid ansökan. Det kan hända att kallelsen hamnar bland skräpposten – så ta en extra titt där!";
 
// explode() bryter en text vid vissa tecken t.ex vid mellanslag och lägger delarna i en array
$ord = explode(" ", $text); // orden placeras i en array
foreach($ord as $value)
{
	echo $value . "<br>";
}
?>

<?php
// en array av strängar 
$ord = [];
$ord[0] = "noll";
$ord[1] = "ett";
$ord[2] = "två";
$ord[3] = "tre";
 
// implode() omvandlar en array till en text
// implode( sträng mellan delarna, arrayen)
$text = implode(" ", $ord);
echo $text;
 
?>


