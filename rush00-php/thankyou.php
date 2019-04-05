<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<link href="style.css" rel="stylesheet">
		<title>H&C Login</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="header">
				<div class="navbar nav">
					<a href="#cart">Cart</a>
					<?php
					session_start();
					if (!($_SESSION["loggued_on_user"]))
					{
					?>
					<a href="login.php">Login</a>
					<?php
					}
					else
					{
					?>
					<a href="myaccount.php">My Account</a>	
					<?php
					}
					?>
				</div>
				<div class="main_nav nav">
					<a href="index.php"><img class="logo" src="logo.png"></a>
					<a href="women.php">Women</a>
					<a href="men.php">Men</a>
					<a href="sale.php">Sale</a>
					<a href="contact.php">Contact</a>
				</div>
			</div>
			<div class=login_form>
				<form method="post" action="invoice.php">
					<div class="login_box">
                        <h1>Thank you for purchase!</h1>
                        <button type="submit">See invoice</button>
					</div>
				</form>
			</div>
		</div>
	</body>
	<footer>
			<p>© 2019 sahan and mchristo. All Rights Reserved</p>
	</footer>
</html>