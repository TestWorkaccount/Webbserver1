<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
<?php
// Alltid validera och sanitera inkommande information innan den används.
$field1 = isset($_POST['field1']) ? htmlentities($_POST['field1']) : null;
$field2 = isset($_POST['field2']) ? htmlentities($_POST['field2']) : null;
$svar1 =  isset($_POST['namn']) ? htmlentities($_POST['namn']) : null;

// if(isset($_POST['namn']))
// {
//     echo $_POST['namn'];
// }
$antalRätt = 0;
if($svar1){
    echo "<h1>{$field1}s resultat på quizzen var:</h1>";
    // echo "<p> compare {$svar1} Åke" . var_dump($svar1 == "Åke") . "</p>";
    // echo "<p>" . var_dump($svar1) . "</p>";
    if($svar1 == "Ake"){
        // echo "Rätt svar";
        $antalRätt++;
    }
    else{
        // echo "Fel svar";
    }
    echo "<p>Antal rätt: $antalRätt </p>";
    // echo $svar1;
}

?>

<form method=post>
    <fieldset>
        <legend>Ett formulärr att posta</legend>
        <p><input type=text name=field1 value='<?=$field1?>' placeholder="Skriv in förnamn" required></p>
        <p><input type=text name=field2 value='<?=$field2?>' placeholder="Skriv in efternamn" required>></p>
        <!-- <p><textarea name=field3 placeholder="Skriv in efternamn"><?=$field2?></textarea></p> -->
        <input type=submit value=Skicka>
    </fieldset>
    <label>Vad heter jag?</label>
    <br>
    
    <input type="radio" name="namn" value="Lina" required />
    <label>Lina</label><br>
    <input type="radio" name="namn" value="Ake" required/>
    <label>Åke</label><br>
    <input type="radio" name="namn" value="Jakob" required/>
    <label>Jakob</label><br>
    <input type="radio" name="namn" value="Bo" required/>
    <label>Bo</label><br>
        



</form>


<?="<p>Allt innehåll i arrayen \$_POST:<br><pre>" . htmlentities(print_r($_POST, 1)) . "</pre>"?>
</body>
</html>