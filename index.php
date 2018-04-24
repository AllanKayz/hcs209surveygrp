<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ASSIGNMENTS HCS209</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<section id="Section">
		<h2>MODULE:  HCS 209- INTERNET<br/>
				GROUP ASSIGNMENT<br/>          
			LECTURER: MR. GIYANI
		</h2>
		<h3>KANYEMBA ALLAN R132185P SVG(5.1)</h3>
		<h3>CHIGUMBU TAPIWA. N R142146Q SVG(5.1)</h3>
		<h3>MAFURATIDZE GOODHOPE. C	R134120T SVG(5.1)</h3>
	</section>
	<br/>
	<br/>
	<!--Assignment 1 Question 1-->
	<section id = "Section">
		<div class="form">
			<h3>Assignment 1 Question 1 Solution</h3>
			<?php
				session_start();
				if(isset($_SESSION['views']))
					$_SESSION['views'] = $_SESSION['views']+1;
				else
					$_SESSION['views']=1;
					echo"<h2>views = ".$_SESSION['views']."</h2>";
			?>
			
			Change Background Color to Green when views = 3
			<?php
				if($_SESSION['views'] == 5){
					session_start();
					$views = $_SESSION['views']; //retrieve the session variable
					unset($_SESSION['views']); //to remove session variable
					session_destroy(); //destroy the session
				}
				else if($_SESSION['views'] == 3)
					echo "<style>body{background-color:green;}</style>";
			?>
		</div>
	</section>
	<br/>
	<br/>
	
	<!--Assignment 1 Question 2-->
		<section id="Section">
			<h3>Assignment 1 Question 2 Solution</h3>
			<form class = "form">
				<label>First Name</label>
				<input type = "text" placeholder = "John" required="required"><br/><br/>
				<label>Surname</label>
				<input type = "text" placeholder = "Doe" required="required"><br/><br/>
				<label>Email</label>
				<input type = "email" placeholder = "johndoe@example.com" required="required"><br/><br/>
				<label>Phone Number</label>
				<input type = "tel" placeholder = "0774833890" required="required"><br/><br/>
				<input type = "submit" value = "Submit">				
			</form>
		</section>
		<br/>
		<br/>
		<!--Assignment 1 Question 3-->
		<section id="Section">
			<h3>Assignment 1 Question 3 Solution</h3>
			<form action="pages/areacicle.php" method="post" class="form">
				<label>Enter radius: </label>
				<input name = "radius" type="text" required="required" >
				<input type = "submit" value="Calculate Area">
			</form>
		</section>
		<br/>
		<br/>
		<!--Assignment 1 Question 4-->
		<section id="Section">
			<h3>Assignment 1 Question 4 Solution</h3>
			<div class="form">
				<p>
					<h4>PHP code showing how MySQL database connection is established</h4>
					<code>
							$con=mysqli_connect("localhost","root","","group");<br/>
							if(!$con){
								die("could not connect".mysqli_error());
							}
					</code><br/><br/>
					<b>Where</b><br/> 
					<i>localhost</i> is host address<br/>
					<i>root</i> is the username<br/>
					<i>group</i> is the database<br/>
				</p>
			</div>
		</section>
		<br/>
		<br/>
		<!--Assignment 1 Question 5-->
		<section id="Section">
			<?php
				if(isset($_POST["sub"])){
					$fna=$_POST["fna"];
					$fsa=$_POST["sna"];
					$mul=$_POST["mult"];
					$x=$fsa+1;
					while($fna<$x){
						$calc=$fna*$fsa;
						echo $fna." multiplied by ".$fsa." is equals ".$calc."<br/>";
						$fna++;
					}
				}

			?>
			<form action="" method="post" class="form">
				<table>
					<tr><td>First Number</td><td><input type="text" name="fna" required="required"/></td></tr>
					<tr><td>Second number</td><td><input type="text" name="sna" required="required"/></td></tr>
					<tr><td>Multiplier</td><td><input type="text" name="mult" required="required"/></td></tr>
					<tr><td>Submit</td><td><input type="submit" name="sub" value="Submit" required="required"/></td></tr>
				</table>
			</form><br/><br/>
		</section>
		<br/>
		<br/>
		
		<!--Assignment 2 Question 1-->
		<section id ="Section">
			<h3>Assignment 2 Question 1 Solution</h3>
			<div class="form">
				<p class="paragragh" align=left>
					<h4>Explaining using relevant code how a cookie is created and destroyed</h4>
					<article> setcookie(name, value, expiration)<br/>
							setcookie has three parameters<br/>
							<ol>
								<li>Name – Sets the name of cookie at user’s computer. You must remember the name of cookie in order to retrieve in future. E.g. UserID</li>
								<li>Value – The value to be saved. E.g. 1234</li>
								<li>Expiration – duration after which cookie will be expired/destroyed. For example some email interfaces says “save id/pass for 7 days” and so on.</li>
							<ol>
					</article>
					<code>
						$cookie_expire = time()+10800;<br/>
						setcookie("Visitorname", "Mike", $cookie_expire);<br/>
						setcookie("Visitorage", "20", $cookie_expire);<br/>
					</code>
					<h4>Delete cookie in PHP</h4>
					<article>You have to use setcookie() again in order to delete a cookie. For that you should specify name argument and use a past date.</article>
					<code>
						setcookie( "Visitorname", "", time()- 60);<br/>
						setcookie( "Visitorage", "", time()- 60);
					</code>
				</p>
			</div>
		</section>
		<br/>
		<br/>
		<!--Assignment 2 Question 2-->
		<section id ="Section">
			<h3>Assignment 2 Question 2 Solution</h3>
			<div class="form">
				<select>
					<?php 
						for ($num=1900; $num<=2018; $num++){
							echo '<option>' .$num. '</option>';
                        }
					?>
				</select>
			</div>
		</section>
		<br/>
		<br/>
		<!--Assignment 2 Question 3-->
		<section id = "Section">
			<h3>Assignment 2 Question 3 Solution</h3>
			<form method="post" id="currency-form" action="pages/currencycon.php">
				<div class="form-group">
					<label>From</label>
					<select name="currency1">
					<option value="USD" selected="1">US Dollar</option>
					</select>
						<label>Amount</label>
						<input type="text" placeholder="Currency" name="amount_input" id="amount" required="required" />
						<label>To</label>
						<select name="currency2">
						<option value="ZAR" selected="1">South African Rand</option>
						<option value="BWP">Botswana Pula</option>
						<option value="ZMW">Zambian Kwacha</option>
						<option value="TZS">Tanzanian Shilling</option>
					</select>
					<button type="submit" name="convert" id="convert" class="btn btn-default">Convert</button>
				</div>
			</form>
		</section>
		<br/>
		<br/>
		
		<!--Assignment 2 Question 4-->
		<section id ="Section">
			<h3>Assignment 2 Question 4 Solution</h3>
			<form method="post" action = "pages/radiobtn.php" class = "form" >
				<div id="detailscard">
					<name><b>Name: </b><span name ="fname" value="John"> John</span></name><br/>
					<name><b>Surname: </b><span name ="surname" value="Chidhafu"> Chidhafu</span></name><br/><br/>
					<input type="radio" value = "Female" name="gender" required="required"
						<?php
							if (isset($gender) && $gender=="female") echo "checked";
						?>
					>Female
					<input type="radio" value = "MALE" name="gender" required="required"
						<?php 
							if (isset($gender) && $gender=="male") echo "checked";
						?>
					>Male <br/>
					<input type="submit" value="OK">
				</div>
			</form>
		</section>
		<br/>
		<br/>
		
		<!--Assignment 2 Question 5-->
		<section id="Section">
		<h3>Assignment 2 Question 5 Solution</h3>
			<form class="form" method="post" action = "pages/random.php">
				<input type="submit" value="Generate Random Number & Find its Sqaure Root">
			</form>
		</section>
	</body>
</html>