<?php
    include("header.php");
    include("../rövarspråket/replace.php");
?>

<?php 
 echo "<p>" . rovare("jag") . "</p>";
 echo "<p>" . rovare("tjabba tjena hallå") . "</p>";

?>

<h1>Här var det en ny sida med samma header och footer</h1>
<p>Sida 2</p>

<?php
    include("footer.php");
?>