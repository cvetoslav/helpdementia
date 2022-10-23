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
						<a href="#">Daily questions</a>
					</li>

					<li>
						<a href="#schedule">Send notification</a>
					</li>

					<li>
						<a href="#pday">Patients state</a>
					</li>
				</ul>
			</nav><!-- /.navdem -->

			<h2>Welcome back, Kaloyan Svilenov!</h2>

			<h3>Your patients are:</h3>

			<ul style="width: 100%; margin-bottom: 30px;">
				<li>
					Name: Kalina Ivanova<br>
					Age: 50<br>
					Current state: Getting better
				</li>

				<li>
					Name: Georgi Hristov<br>
					Age: 63<br>
					Current state: Getting worse
				</li>

				<li>
					Name: Zvezdin Slivov<br>
					Age: 41<br>
					Current state: Simular
				</li>

				<li>
					Name: Maria Milcheva<br>
					Age: 67<br>
					Current state: Getting better
				</li>
			</ul>

			<h3 style="margin-bottom: 20px">Add patient:</h3>
			<input type="text" class="area" placeholder="Name">
			<button class="btn--sign" style="margin-left: 20px; transform: translateX(0%);">Add</button>
			
		</div><!-- /.shell -->
	</section><!-- /.section -->

	<section class="section-cday">
		<div class="shell">
			<h2 style="margin-bottom: 20px;">Send notification:</h2>

			<ul style="width: 100%; margin-bottom: 30px;">
				<li>
					Kalina Ivanova
				</li>

				<li>
					Georgi Hristov
				</li>

				<li>
					Zvezdin Slivov
				</li>

				<li>
					Maria Milcheva
				</li>
			</ul>

			<textarea class="textarea" style="height: 60px;overflow:hidden" name="" id="" cols="15" rows="10" placeholder="Write notification..."></textarea>

			<button class="btn--sign" style="margin-left: 0; transform: translateX(0%);">SEND</button>
		</div><!-- /.shell -->
	</section><!-- /.section-cday -->

	<section class="section-pstate">
		<div class="shell">
			<h2 style="margin-bottom: 20px;">Patient state:</h2>

			<ul style="width: 100%; margin-bottom: 30px;">
				<li>
					Kalina Ivanova
				</li>

				<li>
					Georgi Hristov
				</li>

				<li>
					Zvezdin Slivov
				</li>

				<li>
					Maria Milcheva
				</li>
			</ul>


			<input type="text" class="area" placeholder="Getting better...">

			<button class="btn--sign" style="margin-left: 0; transform: translateX(0%); margin-left: 20px;">Update</button>
		</div><!-- /.shell -->
	</section><!-- /.section-pstate -->

		
	
	<script type="text/javascript" src="../assets/js/queries.js"></script>
</body>
</html>