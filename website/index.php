<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<title>Home page</title>

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png" />

	<link rel="stylesheet" href="assets/css/style.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<header class="header">
		<div class="shell shell--header">
			<a class="logo" href="/">
				<img src="assets/images/logo.png" alt="" width="75" height="75">
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

	<section class="hero">
		<div class="shell">
			<div class="hero__wrapper">
				<div class="hero__content">
					<h1>HELP DEMENTIA.</h1>
					<h1>IMPROVE A LIFE!</h1>
				</div><!-- /.hero__title -->

				<figure class="hero__float">
					<img src="assets/images/logoCropped.png" alt="" width="300" height="300">
				</figure><!-- /.hero__float -->
			</div><!-- /.hero__content -->
		</div><!-- /.shell -->
	</section><!-- /.hero -->

	<section id="aboutus" class="section">
		<div class="shell">
			<header class="section__head">
				<h2>ABOUT US</h2>
			</header><!-- /.section__head -->

			<div class="section__content">
				<p>Оur project "Help Dementia" is developed to diagnose dementia and track the patient's condition by building a direct link between the patient and the caretaker. We also want to educate people about Dementia and provide the necessary information for people to quickly and easily connect with Dementia Care Centers.
				</p>
			</div><!-- /.section__content -->
			
		</div><!-- /.shell -->
	</section><!-- /.section -->

	<div class="section-ourteam">
		<div class="shell">
			<div class="section__head">
				<h2>OUR TEAM</h2>
			</div><!-- /.section__head -->

			<div class="section__content">
				<ul class="team-list">
					<li class="team-member">
						<div class="member">
							<figure class="member__head">
								<img src="assets/images/id.png" alt="" width="846" height="841">
							</figure><!-- /.member__head -->
							
							<div class="member__content">
								<p><strong>Name: </strong>Ivan Dimitrov</p>

								<p><strong>Age: </strong>19</p>

								<p><strong>Country: </strong>Bulgaria</p>
							</div><!-- /.member__content -->
						</div><!-- /.member -->
					</li><!-- /.team-member -->
					
					<li class="team-member">
						<div class="member">
							<figure class="member__head">
								<img src="assets/images/ks.png" alt="" width="840" height="841">
							</figure><!-- /.member__head -->
							
							<div class="member__content">
								<p><strong>Name: </strong>Kaloyan Svilenov</p>

								<p><strong>Age: </strong>19</p>

								<p><strong>Country: </strong>Bulgaria</p>
							</div><!-- /.member__content -->
						</div><!-- /.member -->
					</li><!-- /.team-member -->
					
					<li class="team-member">
						<div class="member">
							<figure class="member__head">
								<img src="assets/images/kb.png" alt="" width="840" height="833">
							</figure><!-- /.member__head -->
							
							<div class="member__content">
								<p><strong>Name: </strong>Katerina Baeva</p>

								<p><strong>Age: </strong>17</p>

								<p><strong>Country: </strong>Bulgaria</p>
							</div><!-- /.member__content -->
						</div><!-- /.member -->
					</li><!-- /.team-member -->
					
					<li class="team-member">
						<div class="member">
							<figure class="member__head">
								<img src="assets/images/tm.png" alt="" width="670" height="662">
							</figure><!-- /.member__head -->
							
							<div class="member__content">
								<p><strong>Name: </strong>Tsvetoslav Mavrodiev</p>

								<p><strong>Age: </strong>19</p>

								<p><strong>Country: </strong>Bulgaria</p>
							</div><!-- /.mmeber__content -->
						</div><!-- /.member -->
					</li><!-- /.team-member -->
				</ul><!-- /.team-list -->
			</div><!-- /.section__content -->
		</div><!-- /.shell -->
	</div><!-- /.section__ourteam -->

	<section id="contacts" class="section-contacts">
		<div class="shell">
			<div class="section__split"></div><!-- /.section__split -->
				
			<header class="section__head">
				<h2>CONTACTS</h2>
			</header><!-- /.section__head -->

			<div class="section__content">
				<form action="?" method="post">
					<div class="grid">
						<div class="grid__col--1of2">
							<div class="grid__row">
								<input type="text" name="name" class="area" placeholder="Name">
							</div><!-- /.grid__row -->

							<div class="grid__row">
								<input type="text" name="email" class="area" placeholder="Email">
							</div><!-- /.grid__row -->

							<div class="grid__row">
								<textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
							</div><!-- /.grid__row -->

							<div class="grid__row">
								<button class="btn btn--submit" type="submit" name="submit">contact us</button>
							</div><!-- /.grid__row -->
						</div><!-- /.col-/-1of2 -->
						
						<div class="grid__col--1of2">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d186126.443455247!2d27.802824348891605!3d43.20475564393969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a4538baaf3d7a1%3A0x5727941c71a58b7c!2sVarna!5e0!3m2!1sen!2sbg!4v1665874909593!5m2!1sen!2sbg" class="contacts-map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div><!-- /.col-/-1of2 -->
					</div><!-- /.grid -->
				</form>
			</div>
		</div><!-- /.shell -->
	</section><!-- /.section-contacts -->

	<section class="popup <?php if(!isset($_SESSION['msg']) && !isset($_SESSION['msg_r'])) echo 'hidden'; ?>">
		<div class="container">
			<div class="signup <?php if(isset($_SESSION['msg'])) echo 'hidden'; ?>">
				<div class="signup__head">
					<h2>SIGN UP</h2>
				</div><!-- /.signup__head -->

				<div class="signup__content">
				
					<form action='/register.php' method='post'>
						<div class="form__row">
							<input type="text" name="fname" id="fnamereg" class="area" placeholder="First Name">
						</div><!-- /.form__row -->
						
						<div class="form__row">
							<input type="text" name="lname" id="lnamereg" class="area" placeholder="Last Name">
						</div><!-- /.form__row -->

						<div class="form__row">
							<input type="text" name="email" id="emailreg" class="area" style='width: 347px' placeholder="E-mail">
							<input type="number" name="age" id="agereg" class="area" style='width: 100px; float: right; padding-right: 15px' min='18' placeholder="Age">
						</div><!-- /.form__row -->

						<div class="form__row">
							<input type="password" name="pass" id="passreg"  class="area" placeholder="Password">
						</div><!-- /.form__row -->

						<div class="form__row">
							<button type='submit' id="register" onclick="register()" class="btn--sign">SIGN UP</button>
						</div><!-- /.form__row -->
					</form>

					<div class="form__row">
						<?php
							if(isset($_SESSION['msg_r']))
							{
								echo "<p style='text-align: center; color: orange'>This E-mail is already taken.</p><br>";
								unset($_SESSION['msg_r']);
							}
						?>
						<p class="switch">I already have an account</p>
					</div><!-- /.form__row -->
				</div><!-- /.signup__container -->
			</div><!-- /.singup -->

			<div class="signin <?php if(!isset($_SESSION['msg'])) echo 'hidden'; ?>">
				<div class="signin__head">
					<h2>SIGN IN</h2>
				</div><!-- /.signin__head -->

				<div class="signin__content">
				
					<form action='/login.php' method='post'>
						<div class="form__row">
							<input type="text" name="user" id="emaillog" class="area" placeholder="Email / Username">
						</div><!-- /.form__row -->

						<div class="form__row">
							<input type="password" name="pass" id="passlog" class="area" placeholder="Password">
						</div><!-- /.form__row -->

						<div class="form__row">
							<button type='submit' id="login" onclick="login()" class="btn--sign">SIGN IN</button>
						</div><!-- /.form__row -->
					</form>

					<div class="form__row">
						<?php
							if(isset($_SESSION['msg']))
							{
								if($_SESSION['msg'] == 1)
									echo "<p style='text-align: center; color: red'>You entered wrong password.</p><br>";
								else
									echo "<p style='text-align: center; color: orange'>There is no user with such username.<br>Please register here:</p><br>";
								unset($_SESSION['msg']);
							}
						?>
						<p class="switch">I don`t have an account</p>
					</div><!-- /.form__row -->
				</div><!-- /.signin__container -->
			</div><!-- /.singup -->
		</div><!-- /.container -->
	</section><!-- /.popup -->

	<script type="text/javascript" src="assets/js/queries.js"></script>
</body>
</html>