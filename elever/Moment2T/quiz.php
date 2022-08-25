

<style>
#myform

{

    display: flex;
    justify-content: center;
    width: 600px;
    margin: auto;
    background-color: brown;
    color: gold;
    padding-left: 15px;
    padding-top: 50px;
    text-align:justify;
}
h1

{

    text-align: center;
    text-decoration: underline 3px;
}

</style>

<div id="myform">

<form action="welcome.php" method="post">
<div class="form-group">
<h1>My FAVORITE CITY QUIZ</h1> <br>
<strong>Name*:</strong><br/>
 <input type="text" name="name" value="" required/>
</div>
<div class="form-group">
<strong>Age*:</strong><br/> 
<input type="text" name="age" value="" required/>
</div>
<div class="form-group">
<strong>Phone:</strong><br/> 
<input type="text" name="phone" value="" />
</div>
<h3>Ques1 : What is the capital city of Sweden? </h3>
<div class="form-group"> 
<ol>
<li>
<input type="radio" name="question1" value="1" />Paris
</li>
<li>
<input type="radio" name="question1" value="2" />Oslo
</li>
<li>
<input type="radio" name="question1" value="3" />Stockholm
</li>
<li>
<input type="radio" name="question1" value="4" />London
</li>
</ol>
</div>
<br/>
<div class="form-group"> 
<h3>Ques2 : What is the capital city of England ?</h3>
<ol>
<li>
<input type="radio" name="question2" value="1" />Lisbon
</li>
<li>
<input type="radio" name="question2" value="2" />Madrid
</li>
<li>
<input type="radio" name="question2" value="3" />Gdansk
</li>
<li>
<input type="radio" name="question2" value="4" />London
</li>
</ol>
</div>
<br/>
<div class="form-group"> 
<h3>Ques3 : What is the capital city of France ?</h3>
<ol>
<li>
<input type="radio" name="question3" value="1" />Paris 
</li>
<li>
<input type="radio" name="question3" value="2" />Amsterdam
</li>
<li>
<input type="radio" name="question3" value="3" />Berlin
</li>
<li>
<input type="radio" name="question3" value="4" />Vienna
</li>
</ol>
</div>
<div class="form-group">
<input type="submit">
</div>

</form>
</div>
</body>
</html>