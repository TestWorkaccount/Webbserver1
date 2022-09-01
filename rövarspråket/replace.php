<?php

$rövarsträng = rovare("Jag heter Åke Bjerregaard och jag skriver flera meningar. Stor bokstov kommer nog inte att översättas till rövarspråk. IKEA har möbler. SATS har träningsmaskiner. Alternativt.");

echo "<br>" . $rövarsträng;

function rovare($text)
{
    $outputstring = "";
    $tempkonsonanter = array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", "S", "T", "B");
    $konsonanter = array_fill_keys($tempkonsonanter, "");

    for($i = 0; $i < strlen($text); $i++){
        if(isset($konsonanter[$text[$i]]) ){
            // echo " konsonant ";
            $outputstring .= $text[$i] . "o" . strtolower($text[$i]);
        }
        else{
            // echo " vokal " . $text[$i];
            $outputstring .= $text[$i];
        }
    }
    return $outputstring;
}
?>