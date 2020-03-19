<!DOCTYPE html>
<html>

<head>
	<title>Star Frappe La Salle</title>
	<link rel="stylesheet" type="text/css" href="css/generals.css"/>
	<link rel="stylesheet" type="text/css" href="css/homes.css"/>
</head>

<body>
	<div id="bound2">
	
		<div id="head">
			<div id="banner">
				<img id="logo" src="img/logo.png"/>
			</div>
			<div class="nav">
				<a class="active" href="index.php">Home</a> 
				<a href="page/about_us.php">About Us</a> 
				<a href="page/services.php">Services</a> 
				<a href="page/contact_us.php">Contact Us</a>
			</div>
		</div>
		
		<div id="content">
			<div id="bg1">
				<div id="greet">
					<span id="greeting">Welcome to Star Frappe</span>
				</div>
			</div>
			<div id="contView">
				<div id="tagContainer">
					<p id="tagLine">Thirsty? Tired from work? Need refresments on a hot day? Then look no futher.</p>
					<br/>
					<br/>
					<br/>
					<br/>
					<span id="tagLine">Here at Star Frappe you can:</span>
				</div>
				<div class="tbl">
					<table>
						<tr>
							<td><img id="pic" src="img/s2.png"/></td>
							<td><img id="pic2" src="img/s3.png"/></td>
							<td><img id="pic3" src="img/s4.png"/></td>
						</tr>	
						<tr>	
							<td><span id="tag">Refresh.</span></td>
							<td><span id="tag">Relax.</span></td>
							<td><span id="tag">Refill.</span></td>
						</tr>
						<tr>
							<td colspan="3">
								<br/>
								<br/>
								<br/>
								<div class="btnService" href="services.php">
									<a href="page/services.php">Service</a>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div id="bg2">
				<div id="closing">
					<span id="closer">Jump start your day!</span>
				</div>
			</div>
		</div>
		<div id="foot">
			<div id="tdContainer">
				<?php include 'includes/footer.php';?>
				<?php include ('sidebar.php'); ?>
			</div>
		</div>
	</div>	
</body>

</html>
