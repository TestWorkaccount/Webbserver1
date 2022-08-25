<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game</title>
</head>
<body>
    <h1>Quiz Game</h1>
    <form action="index.php" method="post">
        <b> * Firstname:</b>  <input type="text" name="firstname"placeholder="Your Firstname"><br>
        <b> * Lastname:</b>  <input type="text" name="lastname" placeholder="Your Lastname"><br>
        <hr>
        <b>Question 1:<label> In which Country is the Capital Tokyo?</b><br></label>
        <input type="radio" name="q1" value="A"> A: Spain<br>
        <input type="radio" name="q1" value="B"> B: Japan<br>
        <input type="radio" name="q1" value="C"> C: Greece<br>
        <input type="radio" name="q1" value="D"> D: China<br>
        <br>
        <b>Question:2 <label> What colors does the Swedish flag have?</b><br></label>
        <input type="radio" name="q2" value="A"> A: Red and Blue<br>
        <input type="radio" name="q2" value="B"> B: Green and Black<br>
        <input type="radio" name="q2" value="C"> C: White and Blue<br>
        <input type="radio" name="q2" value="D"> D: Yellow and Blue<br>  
        <br>
        <b>Question:3 <label> How often is the World Cup organized??</b></label><br>
        <input type="radio" name="q3" value="A"> A: Every 4 years<br>
        <input type="radio" name="q3" value="B"> B: Every 2 years<br>
        <input type="radio" name="q3" value="C"> C: Every 6 years<br>
        <input type="radio" name="q3" value="D"> D: Every 4 years<br>
        <br>
        <input type="submit" name="submit" value="Skicka svaren!">   
</form>
<?php 

if(isset($_POST['submit'])) {

    if(isset($_POST['firstname']) && isset($_POST['lastname'])){

     $fname = $_POST['firstname'];
     $lname = $_POST['lastname'];
    }

	if(empty($fname) && empty($lname) || empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q3'])) {

        echo "<br><b>Fill in all * mandatory fields and then answer all questions.</b>";
	}
	else {

        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];

        $score = 0;

        if($q1== "B") { // B option is correct
        $score++;
        }
        if($q2== "D") { // D option is correct
        $score++;
        }
        if($q3 == "A") { // A is correct answer
        $score++;
        }

    echo " <br><b>Your Fullname:</b> $fname $lname.";
    echo " <br><b>You got:</b> $score / 3 correct answers.";
	}
}
?>
</body>
</html>