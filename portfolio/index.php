<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Portfolio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="other/js/viewPicture.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			        <div class="navbar-header">
				      <a href="index.php" class="navbar-brand">PORTFOLIO</a>
			        </div>
			
			      <ul class="nav navbar-nav">
				     <li class="active"><a href="index.php">Home</a></li>
				     <li><a href="index.php?page=person">Personal Information</a></li>
				     <li><a href="index.php?page=experience">Experience</a></li>
				     <li><a href="index.php?page=studies">Studies</a></li>
			      </ul>
			      	
			      <ul class="nav navbar-nav navbar-right">
			      	<li><a href="index.php?page=login">
			      	<span class="glyphicon glyphicon-user"></span> Manage</a></li>
			      </ul>
			</div>
		</nav>
		<div class="container">
			<h2>MY PORTFOLIO</h2>
			<div class="panel panel-default">
				<div class="panel-heading">JHON JANER MORENO CACERES</div>
				<div class="panel-body">
					<?php 
					   require_once('controllers/Autoload.php');

                       $autoload = new controllers\Autoload();
                       $autoload->run();

                       if(isset($_GET['page']))
                       {
                       	 $router = new controllers\Router($_GET['page']);
                       }
					         
					?>
				</div>
				<div class="panel-footer">Panel Footer</div>
			</div>
		</div>
	</body>
</html>


