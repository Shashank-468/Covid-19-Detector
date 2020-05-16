<?php
//include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Output</title>
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
	h2
		{
		color:cyan;
		}
	#title
		{
		color:brown;
		}
	.para{
		background-color:green;
		font-size:40px;
		color:red;
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
      				<li><a href="index.php">Home</a></li>
      				<li><a href="contact.php">Contact Us</a></li>
    			</ul>
  		</div>
	</nav>
  
	<h1 align="center">COVID-19 DETECTOR</h1> 
	<br>
<?php
	
	if($_POST['submit'])
	{
		$a=$_POST['fn'];
		$b=$_POST['age'];
		$c=$_POST['cy'];
		$e=$_POST['temp'];
		$f=$_POST['py'];
		$h=$_POST['ry'];
		$j=$_POST['no'];
		$m=$_POST['ay'];
		$n=$_POST['rpt'];
		$b1=0;
		$c1=0;
		$d1=0;
		$e1=0;
		$f1=0;
		$g1=0;
		$h1=0;
		$i1=0;
		//$query="INSERT INTO data VALUES ('$a','$b','$c','$e','$f','$h','$j','$m')";
		//$data=mysqli_query($conn,$query);
		//if($data)
		//{
			
			
				if($b>=50)
				{
					$b1=1;
				}
	
				if($c=='Yes')
				{	
					$c1=1;
				}
				if($e>=39)
				{
					$d1=1;
				}
				if($f=='Yes')
				{
					$e1=1;
				}
				if($h=='Yes')
				{
					$f1=1;
				}
				if($j=='Normal')
				{
					$g1=-1;
				}
				else if($j=='Moderate')
				{
					$g1=1;
				}		
				else
				{
					$g1=1;
				}
				if($m=='Yes')
				{
					$h1=1;
				}
				if($n=='Yes')
				{
					$i1=1;
				}
				$total=$b1+$c1+$d1+$e1+$f1+$g1+$h1;
				if($total>=4)
				{
					echo '<p class="para">hi! '.$a." You are infected from Covid 19 Virus.</p>";
					echo '<p class="para">Note:-These Results are only based from internet Database and we dont give you any assurance that these reults are true.</h2></p>';
					echo '<p class="para">This is a project not exact Covid 19 Virus Detector. So Please Consult Doctors Immediately if you are Feeling Sick.</h2></p>';

					
				}	
				else
				{
					echo '<p class="para">hi! '.$a." You are not infected from Covid 19 Virus.</p>";
					echo '<p class="para">Note:-These Results are only based from internet Database and we dont give you any assurance that these reults are true.</h2></p>';
					echo '<p class="para">This is a project not exact Covid 19 Virus Detector. So Please Consult Doctors Immediately if you are Feeling Sick.</h2></p>';	
				
					
				}
			
		//}
	}
                        
	    
?>	

</body>
</html>

	
	