<?php
session_start();
if (!isset($_SESSION['email']))
	header('location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-after-login.php"); ?>
			<form action="confirm.php" method="get">
				<div class="row" style="margin-top:80px;">
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#1</div>
							</div>
							<div class="panel-body">
								<br/>
								<center><img src=" images/pixel.jpg" alt="Item"/></center>
								<p> <br/> <br/> Google Pixel XL <br/>Rs 54000</p>
								<a href="cart-script.php?id=1&add=add" name="add" value="add" class="btn btn-primary btn-block">
								<?php
								require_once("add-or-added.php");
								echo message(1);
								?>
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#2</div>
							</div>
							<div class="panel-body">
								<center><img src="images/s8.jpg" alt="Item"/></center>
								<p><br/> <br/>Samsung Galaxy S8<br/>Rs 57900.</p>
								<a href="cart-script.php?id=2&add=add" name="add" value="add" class="btn btn-primary btn-block">
								<?php
								require_once("add-or-added.php");
								echo message(2);
								?>
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#3</div>
							</div>
							<div class="panel-body">
								<center><img src="images/s7.jpg" alt="Item"/></center>
								<p><br/><br/> Samsung Galaxy S7 Edge <br/>Rs 50900.</p>
								<a href="cart-script.php?id=3&add=add" name="add" value="add" class="btn btn-primary btn-block">
								<?php
								require_once("add-or-added.php");
								echo message(3);
								?>
							</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#4</div>
							</div>
							<div class="panel-body">
								<center><img src="images/3t.jpg" alt="Item"/></center>
								<p><br/><br/>OnePlus 3T <br/>Rs 29750</p>
								<a href="cart-script.php?id=4&add=add" name="add" value="add" class="btn btn-primary btn-block">
								<?php
								require_once("add-or-added.php");
								echo message(4);
								?>
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#5</div>
							</div>
							<div class="panel-body">
								<center><img src="images/g6.jpg" alt="Item"/></center>
								<p> <br/>LG G6, <br/>Rs 41500.</p>
								<a href="cart-script.php?id=5&add=add" name="add" value="add" class="btn btn-primary btn-block">
								<?php
								require_once("add-or-added.php");
								echo message(5);
								?>
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">#6</div>
							</div>
							<div class="panel-body">
								<center><img src="images/xzs.jpg" alt="Item"/></center>
								<p><br/> Xperia XZs<br/> Rs 49000</p>
								<a href="cart-script.php?id=6&add=add" name="add" value="add" class="btn btn-primary btn-block">
								<?php
								require_once("add-or-added.php");
								echo message(6);
								?>
							</a>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
