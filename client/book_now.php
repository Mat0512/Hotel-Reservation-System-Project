<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/general_style.css" />
		<link rel="stylesheet" href="../css/homepage_style.css" />
		<link rel="stylesheet" href="../css/forms_style.css" />
		<title>Book Now</title>
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
		<main>
			<section class="find-a-room-section" style="margin-top: 150px">
				<div class="wrapper">
					<div class="headings">
						<h3 class="header">Find a Room</h3>
						<p class="sub-header">
							Searches rooms corresponds to your needs
						</p>
					</div>
					<?php 
						include '../forms/search_room_form.php'
					?>
				</div>
			</section>
		</main>
		<?php 
			include 'footer.php'
		?>
	</body>
	<script src="../js/searchRoomEvent.js"></script>
</html>
