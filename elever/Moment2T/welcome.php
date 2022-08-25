<html>
<body>

<style>
h1
{
	display: flex;
	justify-content: center;
	margin: auto;
	text-align: center;
	color: darkblue;
	margin-top: 50px;
	background-color:yellow;
	width: 500px;
	padding-bottom: 30px;
	margin-bottom: 20px;
}

h2

{

color: gold;
text-align: center;
margin: auto;

}

#container

{

	width: 500px;
	background-color:brown; 
	display: flex;
	justify-content: center;
	margin: auto;
}

</style>


<h1>Welcome <br> <?php global $quest1; echo " <br> ". $_POST["name"]; ?><br></h1>


<div id="container">
<h2>Your Age  is: <?php echo " <br> ". $_POST["age"]; 


if($quest1 =='' || $quest2 =='' || $quest3 =='')
    $quest1 = $_POST['question1'];
	$quest2 = $_POST['question2'];
	$quest3 = $_POST['question3'];


	if($quest1=='' || $quest2 =='' || $quest3 =='') {
		echo '<h2>Please answer all questions.</h2>';
	}
	else {
		$score = 0;
		if($quest1 == 3) 
		$score++;
		
		if($quest2 == 4) 
		$score++;
		
		if($quest3 == 1) 
		$score++;
		
	
		
		echo " <br>  Your score Is <br>". $score."<br> Out Of Three";
		}


?></h2>
</div>

</body>
</html>