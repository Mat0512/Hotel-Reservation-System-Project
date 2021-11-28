<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/general_style.css" />
		<link rel="stylesheet" href="../css/contact_us_style.css" />
		<title>Document</title>
	</head>
	<body>
	<header class="dark-nav">
			<img class="logo" src="../images/logo.svg" alt="logo" />
			<nav class="flex-column">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="rooms.php">Rooms</a>
					</li>
					<li>
						<a href="book_now.php">Book Now</a>
					</li>
					<li>
						<a href="contact_us.php">Contact Us</a>
					</li>
				</ul>
			</nav>
		</header>
		<main class="main-wrapper">
			<div class="wrapper flex-row" id="contact-us-wrapper">
				<div class="contacts flex-column">
					<div class="contacts-col flex-column">
						<h1 class="header">Contact Us</h1>
						<div class="contact-details">
							<img
								src="../images/black_phone_icon.svg"
								alt="phone icon"
							/>
							+63 (XXX) YYY ZZZ
						</div>
						<div class="contact-details">
							<img
								src="../images/black_mail_icon.svg"
								alt="mail icon"
							/>
							emailname@email.com
						</div>
					</div>

					<div class="contacts-col">
						<h2 class="header">Stay in Touch</h2>
						<div class="contact-details">
							<img
								src="../images/ig_icon.svg"
								alt="instagram icon"
							/>
							<a href="#">Instagram</a>
						</div>
						<div class="contact-details">
							<img src="../images/fb_icon.svg" alt="facebook icon" />
							<a href="#">Facebook</a>
						</div>
					</div>

					<div class="address-col">
						Street Number + Street Name <br />Barangay/District +
						City ZIP <br />Code + Metro Manila
					</div>
				</div>
				<div class="map"></div>
			</div>
		</main>
		<?php 
			include 'footer.php';
		?>
	</body>
</html>
