<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mega Global</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="MainPageStyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <?php require('./database.php'); ?>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span> 
			</button>
			<p class="navbar-brand">Mega Global</p>
			
		  </div>
		  <div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
			  <li style="font-size:15px"><a href="#">Home</a></li>
              <li style="font-size:15px"><a href="./Register.php">Register</a></li>
			</ul>
		  </div>
		</div>
	  </nav>
	  <div class="section">
			<h1> This is a main page </h1>
	 </div> 
	  <footer class="container-fluid bg-4 text-center" style="position:absolute;bottom:0;height: 50px;width:100%;padding:20px">
		<p>Mega Global</p> 
	</footer>
</body>
</html>