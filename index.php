
<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID-19 DETECTOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="myscript1.js"></script>
  <script src="myscript2.js"></script>
<style>
	body
	    {
		background-image:url("covid.jpg");
		background-size:100%;
	    }
	h1
	    {
		border:10px solid green;
		background-color:orange;
	    }
	h1:hover
	    {
		transform:scale(1.1);
		background-color:cyan;
	    }
	.details
	    {
		margin:10px;
		padding:20px;
		border:5px solid grey;
	    }
	#legend
	    {
		color:brown;
	    }
	h3
	    {
		color:Pink;
	    }
	.button 
		{
		display: inline-block;
		border-radius: 4px;
		background-color: #f4511e;
		border: none;
		color: #FFFFFF;
		text-align: center;
		font-size: 18px;
		padding: 20px;
		width: 250px;
		transition: all 0.5s;
		cursor: pointer;
		margin: 5px;
		}
	.button span 
		{
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.5s;
		}

	.button span:after 
		{
		content: '\00bb';
		position: absolute;
		opacity: 0;
		top: 0;
		right: -20px;
		transition: 0.5s;
		}

	.button:hover span 
		{
		padding-right: 25px;
		}

	.button:hover span:after 
		{
		opacity: 1;
		right: 0;
		}

</style>

</head>

<body>

	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="#">Covid-19 Detector</a>
    			</div>
    			<ul class="nav navbar-nav">
      				<li class="active"><a href="#">Home</a></li>
      				<li><a href="contact.php">Contact Us</a></li>
    			</ul>
  		</div>
	</nav>
  
	<h1 align="center">COVID-19 DETECTOR</h1> 
	<form class="details" method="post" action="">
		<fieldset>
			<legend><h3 id="legend">Details</h3></legend>
			<br>
			<br>
			<label><h3>Patient's Name:-</h3></label>&nbsp&nbsp
			<input type="text" placeholder="First Name" name="fn">&nbsp&nbsp
			<input type="text" placeholder="Middle Name" name="mn">&nbsp&nbsp
			<input type="text" placeholder="Last Name" name="ln">
			<br>
			<label><h3>Age:-</h3></label>&nbsp&nbsp
			<input type="number" placeholder="In Yrs" name="age">
			<br>
			<label><h3>Cough:-</label>&nbsp&nbsp
			<input type="radio" name="cy" value="Yes">&nbsp&nbspYes&nbsp&nbsp<input type="radio" name="cy" value="No">&nbsp&nbspNo</h3>			
			<label><h3>Fever:-</label>&nbsp&nbsp</h3>
			<input type="number" placeholder="in celsius" name="temp"><h3>`C</h3>
			<label><h3>Body Pain:-</label>&nbsp&nbsp
			<input type="radio" name="py" value="Yes">&nbsp&nbspYes&nbsp&nbsp<input type="radio" name="py" value="No">&nbsp&nbspNo</h3>
			<label><h3>Runny Nose:-</label>&nbsp&nbsp
			<input type="radio" name="ry" value="Yes">&nbsp&nbspYes&nbsp&nbsp<input type="radio" name="ry" value="No">&nbsp&nbspNo</h3>
			<label><h3>Difficulty in Breathing:-</label>&nbsp&nbsp
			<input type="radio" name="no" value="Normal">&nbsp&nbspNormal&nbsp&nbsp<input type="radio" name="no" value="Moderate">&nbsp&nbspModerate&nbsp&nbsp<input type="radio" name="no" value="Critical">&nbsp&nbspCritical</h3>
			<br>
			<label><h3>Visited abroad within 90 days:-</label>&nbsp&nbsp
			<input type="radio" name="ay" value="Yes">&nbsp&nbspYes&nbsp&nbsp<input type="radio" name="ay" value="No">&nbsp&nbspNo</h3>
			<label><h3>If yes, Then Country Name:-</label>&nbsp&nbsp</h3>
			<input type="text" placeholder="country" name="cnt">
			<br>
			<center>
			<br>
			<input type="submit" class="button" style="vertical-align:middle" value="Submit" name="submit" formaction="output.php">
			<br>
			<input type="reset" class="button" style="vertical-align:middle" value="Reset">
			
			</center>
		</fieldset>
	</form>
</body>
</html>

