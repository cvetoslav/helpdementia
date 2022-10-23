<?php
require 'assets/php/conn.php';
session_start();

$names = json_decode(file_get_contents("http://country.io/names.json"), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<title>Dementia</title>

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png" />

	<link rel="stylesheet" href="assets/css/styledement.css" />

	<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
    />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<header class="header">
		<div class="shell shell--header">
			<a class="logo" href="index.php">
				<img src="assets/images/logo.png" alt="" width="75" height="75">
			</a><!-- /.logo -->

			<nav class="nav">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>

					<li>
						<a href="dementia.php">Dementia</a>
					</li>

					<li>
						<a href="index.php#aboutus">About us</a>
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

	<section class="section">
		<div class="shell">
			<nav class="navdem">
				<ul>
					<li>
						<a href="#">What is dementia?</a>
					</li>

					<li>
						<a href="#calcdem">Dementia probability</a>
					</li>

					<li>
						<a href="#cendem">Dementia health centers</a>
					</li>
				</ul>
			</nav><!-- /.navdem -->
		</div><!-- /.shell -->
		
	</section><!-- /.section -->

	<section class="section-dementia">
		<div class="shell">
			<div class="section__wrapper">
				<h2>What is Dementia?</h2>

				<p>Dementia is a syndrome (a group of related
	symptoms), not a specific disease. Dementia
	describes a gradual decline in memory, thinking
	and social abilities that is severe enough to
	interfere with daily functioning.</p>

				<p>The main feature of dementia is memory
	loss, but not every memory loss is dementia.
	Dementia is progressive which means it gets
	worse over time.</p>

				<p>Sometimes you may notice changes in behaviour
	or emotion (e.g. agitation or depression) in an
	affected person even before you see memory
	problems. However, their consciousness stays
	intact.</p>

				<p>Dementia is one of the major causes of disability
	and dependency among older people. It is
	overwhelming for the people affected, their
	families and society at large.</p>

			</div><!-- /.section__wrapper -->
			
		</div><!-- /.shell -->
	</section><!-- /.section-dementia -->

	<section id="calcdem" class="section-calc">
		<div class="shell">
			<h2>What is the chance you have dementia?</h2>

			<div class="section__content">
				<div class="grid__row">
					<select name="country" id="country" class="select-country">
						<option value="0.0166">Austria</option>
						
						<option value="0.0169">Belgium</option>
						
						<option value="0.0154">Bulgaria</option>
						
						<option value="0.0160">Croatia</option>
						
						<option value="0.0117">Cyprus</option>
						
						<option value="0.0141">Czech Republic</option>
						
						<option value="0.0151">Denmark</option>
						
						<option value="0.0174">Estonia</option>
						
						<option value="0.0174">Finland</option>
						
						<option value="0.0183">France</option>
						
						<option value="0.0191">Germany</option>
						
						<option value="0.0199">Greece</option>
						
						<option value="0.0149">Hungary</option>
						
						<option value="0.0109">Ireland</option>
						
						<option value="0.0212">Italy</option>
						
						<option value="0.0174">Latvia</option>
						
						<option value="0.0174">Lithuania</option>
						
						<option value="0.0125">Luxembourg</option>
						
						<option value="0.0138">Malta</option>
						
						<option value="0.0149">Netherlands</option>
						
						<option value="0.0138">Poland</option>
						
						<option value="0.0188">Portugal</option>
						
						<option value="0.0143">Romania</option>
						
						<option value="0.0115">Slovakia</option>
						
						<option value="0.0165">Slovenia</option>
						
						<option value="0.0183">Spain</option>
						
						<option value="0.0166">Sweden</option>
						
						<option value="0.0156">United Kingdom</option>
					</select>
				</div><!-- /.grid__row -->

				<div class="grid__row">
					<select name="age" id="age" class="age">
						<option value="0.001"><60</option>

						<option value="0.006">60-64</option>

						<option value="0.013">65-69</option>

						<option value="0.033">70-74</option>

						<option value="0.08">75-79</option>

						<option value="0.121">80-84</option>

						<option value="0.219">85-89</option>

						<option value="0.408">90+</option>
					</select>
				</div><!-- /.grid__row -->

				<div class="grid__row">
					<select name="gender" id="gender" class="mf">
						<option value="0.33">Male</option>
						<option value="0.66">Female</option>
					</select>
				</div><!-- /.grid__row -->

				<div class="grid__row">
					<button class="btn--sign" id="calc">calculate</button>
				</div><!-- /.grid__row -->

				<h3>The probability for you to have dementia is:</h3>

				<h4 id="countryout">Country: </h4>

				<h4 id="ageout">Age: </h4> 

				<h4 id="genderout">Gender: </h4> 
			</div><!-- /.section__content -->
		</div><!-- /.shell -->
	</section><!-- /.section-calc -->

	<div id="cendem" class="section-center">
		<div class="shell">
			<h2 style="margin-bottom: 20px;">Dementia Health Center</h2>

			<div class="section__content">
				<table>
				    <?php

				    $sql = "SELECT * FROM health_centres";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					  while($row = $result->fetch_assoc()) {
					    	$id = $row['id'];
				            $country = $row['country'];
				            $name = $row['name'];
				            $phone = $row['phone'];
				            $location = $row['location'];
				            
				            if($id == 7){

				            }else {
				            	echo "<tr style='height:40px'><td><div style='width: 40px; height: 30px' class='fi fi-" .strtolower(array_search($country, $names)). " fib'></div></td> <td style='padding-left: 15px;'>{$name}</td> <td>{$phone}</td> <td style='padding-left: 15px;'>{$location}</td> </tr>";
				            }

				            
					  }
					} else {
					  echo "0 results";
					}
					$conn->close();
					
				    ?>
				    </table>
			</div><!-- /.section__content -->
		</div><!-- /.shell -->
	</div><!-- /.section-center -->

	<script type="text/javascript" src="assets/js/queries.js"></script>
</body>
</html>