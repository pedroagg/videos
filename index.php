<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="#"><font size="6" face="Broadway" color="#81DAF5">Videos UEM</font></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	 	<span class="navbar-toggler-icon"></span>
 	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
  				<a class="nav-link" href="#" >Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
  				<a class="nav-link" href="dashboard.php">Dashboard</a>
				</li>
      <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
      </li>
			</ul>
			<form class="form-inline mt-2 mt-md-0">
				<!--Originalmente en placeholder ponia search-->
			<input class="form-control mr-sm-2" type="text" placeholder="Busca aqui" aria-label="Search">
			 	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
		 	</form>
	</div>
	</nav>
</div>
<div class="form" style="margin-top: 70px">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>


</div>
</body>
</html>