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
<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP berkay quiz!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1>PHP berkay quiz</h1>
	</div>
      </header>


      <main>
	<div class="container">
	     <h2>Klart!</h2>
	     <p>Grattis du är klar med quizzen</p>
	     <p>Din Poäng: <?php echo $_SESSION['score']; ?></p>
	     <a href="question.php?n=1" class="start">Gör om quizzen</a>
	     <?php session_destroy(); ?>
	</div>
      </main>


    <footer>
      <div class="container">
      	   Copyright &copy; 2022 Berkay
      </div>
    </footer>
  </body>
</html>