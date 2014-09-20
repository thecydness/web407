<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?= $title ?></title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Our Clients</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="index.php/clients">Clients</a></li>
						<li><a href="index.php/contracts">Contracts</a></li>
						<li><a href="index.php/hosting">Hosting</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<div class="container theme-showcase" role="main">

			<!-- Main jumbotron for a primary marketing message or call to action -->
			<div class="jumbotron">
				<h1><?= $title ?></h1>
				<p>This is a place to track all client information.</p>
				<a class="btn btn-lg btn-default">View Clients &raquo;</a>
				<a class="btn btn-lg btn-default">View Contracts &raquo;</a>
				<a class="btn btn-lg btn-default">View Hosting Accounts &raquo;</a>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>