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
							echo "<li> <a href='logout.php'>Sign out</a> </li>";
						}
						else{
							echo "<li id='popup'> <a href='#'>Sign up</a> </li>";
						}
					?>
				</ul>
			</nav><!-- /.nav -->
		</div><!-- /.shell -->
	</header><!-- /.header -->

	<section class="popup">
		<div class="card">
				
		</div><!-- /.card -->
	</section><!-- /.popup -->

	<?php
		
		$sql = "select * from users where id={$user}";
		$res = $conn->query($sql)->fetch_assoc();
		
		if((int)$res['access'] == 1) require_once('dashboard_patient.php');
		else if((int)$res['access'] >= 5) require_once('dashboard_caretaker.php');  // TODO: add admin dashboard
		
	?>

</body>
</html>