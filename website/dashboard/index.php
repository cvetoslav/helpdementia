<?php

session_start();
if(!isset($_SESSION['user_id']))
{
	header("Location: https://helpdementia.ddns.net/");
	exit();
}

$user = $_SESSION['user_id'];

$conn = new mysqli("localhost", 'dementia', "IbemS@123", 'helpdementia');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<title>Dashboard</title>

	<link rel="shortcut icon" type="image/x-icon" href="/assets/images/logo.png" />

	<link rel="stylesheet" href="../assets/css/style.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<header class="header">
		<div class="shell shell--header">
			<a class="logo" href="/">
				<img src="/assets/images/logo.png" alt="" width="75" height="75">
			</a><!-- /.logo -->

			<nav class="nav">
				<ul>
					<li>
						<a href="/">Home</a>
					</li>

					<li>
						<a href="/dementia.php">Dementia</a>
					</li>

					<li>
						<a href="/#aboutus">About us</a>
					</li>
					
					<?php
						if(isset($_SESSION['user_id'])){
							echo "<li> <a href='/dashboard'>Dashboard</a> </li>";
							echo "<li> <a href='/logout.php'>Sign out</a> </li>";
						}
						else{
							echo "<li id='popup'> <a href='#'>Sign up</a> </li>";
						}
					?>
				</ul>
			</nav><!-- /.nav -->
		</div><!-- /.shell -->
	</header><!-- /.header -->

	<section class="section-info">
		<div class="shell">
			<nav class="navdem">
				<ul>
					<li>
						<a href="#">Your day</a>
					</li>

					<li>
						<a href="#schedule">Your schedule</a>
					</li>

					<li>
						<a href="#pday">Your previous days</a>
					</li>
				</ul>
			</nav><!-- /.navdem -->

			<h2>Welcome back, Admin!</h2>

			<h3>Your caretaker is: Kaloyan Svilenov</h3>

			<h3>Phone: 088 839 2878</h3>
		</div><!-- /.shell -->
	</section><!-- /.section -->

	<section class="section-cday">
		<div class="shell">
			<h2 style="margin-bottom: 20px;">Write about your day:</h2>

			<textarea class="textarea" name="yourday" id="yourday" cols="30" rows="10" placeholder="Write everything from your day here!"></textarea>

			<button class="btn--sign" style="margin-left: 0; transform: translateX(0%);">SAVE</button>
		</div><!-- /.shell -->
	</section><!-- /.section-cday -->

	<section class="popup">
		<div class="card">
			<h3 id="cardq">What is the name of your daughter?</h3>
		</div><!-- /.card -->
	</section><!-- /.popup -->

	<section class="section-schedule">
		<div class="shell">
			<h2 style="margin-bottom: 20px;">Your schedule:</h2>

			<div class="table" style="width: 100%;">
				<table style="width: 100%;">
					<colgroup>
						<col style="width: 15%;">
						<col style="width: 55%;">
						<col style="width: 30%;">
					</colgroup>
					<tr>
						<th>Time</th>
						<th>Activity</th>
						<th>Place</th>
					</tr>
					
					<tr>
						<td>08:00 - 8:15</td>
						
						<td>Brush your teeth</td>

						<td>Bathroom</td>
					</tr>

					<tr>
						<td>8:45 - 9:15</td>
						
						<td>Make coffee</td>

						<td>Kitchen</td>
					</tr>

					<tr>
						<td>11:00 - 11:15</td>
						
						<td>Take out the trash</td>

						<td>Street</td>
					</tr>

					<tr>
						<td>12:00 - 13:00</td>
						
						<td>Walk the dog</td>

						<td>Park</td>
					</tr>
				</table>
			</div><!-- /.table -->
		</div><!-- /.shell -->
	</section><!-- /.section-schedule -->

	<div class="section-prev">
		<div class="shell">
			<h2 style="margin-bottom: 20px;">Your previous days:</h2>

			<ul>
				<li>17.10.2022</li>

				<li>18.10.2022</li>

				<li>19.10.2022</li>

				<li>20.10.2022</li>

				<li>21.10.2022</li>

				<li>22.10.2022</li>

				<li>23.10.2022</li>
			</ul>
		</div><!-- /.shell -->
	</div><!-- /.section-prev -->

	
	
	<script type="text/javascript" src="../assets/js/queries.js"></script>
</body>
</html>