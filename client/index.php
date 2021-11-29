<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/general_style.css" />
		<link rel="stylesheet" href="../css/homepage_style.css" />
		<link rel="stylesheet" href="../css/forms_style.css" />
		<title>Home</title>
	</head>
	<body>
		<?php
			include 'header.php';
		?>
		<main>
			<section class="hero-title-section">
				<div class="title-and-description">
					<h1>Hero Title Example</h1>
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing
						elit. Id aperiam, ullam quam officia a eligendi dolorum
						libero labore vero. Voluptas sed unde rem quis
						perferendis inventore accusamus ratione veritatis quam!
					</p>
				</div>
			</section>

			<section class="about-us-section">
				<div class="wrapper flex-row about-us-wrapper">
					<div class="image-slider">
						<img src="../images/hotel_room.png" alt="room" />
					</div>
					<div class="text-group flex-column">
						<div>
							<h1 class="header">Discover Adonis Hotel</h1>
							<h2 class="sub-header">Our Accomodation</h2>
						</div>
						<p id="description">
							Lorem, ipsum dolor sit amet consectetur adipisicing
							elit. Nemo impedit quidem non, blanditiis nam beatae
							numquam, modi cupiditate sapiente fuga dicta
							perspiciatis facere, voluptatibus totam ducimus.
							Inventore consequatur vitae voluptates.
						</p>
						<button>Show Rooms</button>
					</div>
				</div>
			</section>

			<section class="find-a-room-section">
				<div class="wrapper">
					<div class="headings">
						<h1 class="header">Find a Room</h1>
						<h2 class="sub-header">
							Searches rooms corresponds to your needs
						</h2>
					</div>
					<?php
						include '../forms/search_room_form.php'
					?>
				</div>
			</section>
		</main>
		<?php 
			include 'footer.php';
		?>
		<script src="../js/searchRoomEvent.js"></script>
	</body>
</html>
