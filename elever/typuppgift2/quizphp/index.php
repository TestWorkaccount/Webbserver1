 <?php 
  
  $db_host = 'localhost';
  $db_name = 'quiz';
  $db_user = 'root';
  $db_pass = '';
  
  //Create mysqli object
  $mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
  
  //Error handler
  if($mysqli->connect_error){
    printf("Connect failed: %s\n",$mysqli->connect_error);
    exit;
  }
  
 ?>

<?php
	//Get the total questions
	$query="select * from questions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Berkay Quiz program!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1>Berkay Quiz program</h1>
	</div>
      </header>


      <main>
      <div class="container">
        <h2></h2>
	<p>En quiz om allmän fakta.</p>
	<ul>
		<li><strong>Antal frågor: </strong><?php echo $total; ?></ul>
		<li><strong>Typ: </strong>Multiple Choice</ul>
    
		<li><strong>Uppskattad tid: </strong><?php echo $total*0.5; ?> minuter</ul>
	</ul>
	<a href="question.php?n=1" class="start">Starta Quiz</a>
      </div>
    </div>
    </main>


    <footer>
      <div class="container">
      	   Copyright &copy; 2022, Berkay
      </div>
    </footer>
  </body>
</html>