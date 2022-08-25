<?php
echo "<p>", $text1, $flyttal1, "</p>";    // Separated by ,
echo "<p>" . $text2 . $flyttal2 . "</p>"; // Concatinated with . 
echo "<p>$text3 $heltal1</p>";            // Print out variables within "
echo "<p>{$text4} {$heltal2}</p>";        // Separate variables within string with {}

// Notice that the values for false and null is not visible on the webpage.
echo "<p>Sant=$sant<br>falskt=$falskt<br>inget=$inget</p>";
?>