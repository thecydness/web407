<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?= $title ?></title>

		<link href="/css/bootstrap.min.css" rel="stylesheet">
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
					<a class="navbar-brand" href="/">Our Clients</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li<? if( $_SERVER['REQUEST_URI'] == '/' ) echo ' class="active"' ?>><a href="/">Home</a></li>
						<li<? if( $_SERVER['REQUEST_URI'] == '/index.php/page/clients' ) echo ' class="active"' ?>><a href="/index.php/page/clients">Clients</a></li>
						<li<? if( $_SERVER['REQUEST_URI'] == '/index.php/page/contracts' ) echo ' class="active"' ?>><a href="/index.php/page/contracts">Contracts</a></li>
						<li<? if( $_SERVER['REQUEST_URI'] == '/index.php/page/hostings' ) echo ' class="active"' ?>><a href="/index.php/page/hostings">Hosting</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container theme-showcase" role="main">