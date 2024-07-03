<!DOCTYPE html>
<html>
	<head>
	<!-- Created by Akash Maddala-->
	<meta charset = "UTF-8">
	<title>STARDOTCOM</title>
	<link rel = "stylesheet" type="text/css" href = "css/styles.css">
	</head>
	<body>
		<a id="Top"></a>
		<table class = "tb1PageLayout">
			<tr class="trTopLayout">
			    <!-- Logo code in header -->
				<th colspan = "2" class="logo-img">
					<p>
                    <a href="home.php">                   	
                        <img src="./images/starf.png" alt="STARDOTCOM">
                        <img src="./images/dotcom2.png" alt="STARDOTCOM">
                    </a>
                    </p>
                
				</th>
			</tr>
			<!-- Navigation -->
			<tr class="trCenterLayout">
				<td class="tdLeftLayout">
					<nav>
						<ul>
							 <li class="li-style">
                       			 <a href="home.php">Home</a>
                    		</li>
                    		<li class="li-style">
                      		  	<a href="Horoscope.php">Horoscope</a>
                   			 </li>
                   			 <li class="li-style">
                      			<a href="Gaming.php">Gaming</a>
                    		</li>
                    		<li class="li-style">
                        		<a href="Bookings.php">Seminars</a>
                   			 </li>
                    		<li class="li-style">
                        		<a href="mybookings.php">My Bookings</a>
                    		</li>
                    		<li class="li-style">
                       		 	<a href="Landmarks.php">Landmarks</a>
                    		</li>
                    		<li class="li-style">
                       		 	<a href="Subscriptions.php">Subscriptions</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="Pacman.php">Pacman</a>
                    		</li>
                    		<li class="li-style">
                       		 	<a href="Aboutus.php">About Us</a>
                    		</li>
						</ul>

					</nav>
				</td>
				<!-- main content -->
				<td class="tdRightLayout">
					<h1>About Us!</h1>

					<p>
						<h2>Akash </h2>
						<h2>STARDOTCOM strives to provide the best service possible with every contact!</h2>
</p>
					<table class = "tableBorder" >
					<tr>
					<?php 
					//getting the contacting information from an array
					$contactArray = [
					               "<p>The Home, Horoscope, Gaming, Seminars, My Bookings, LANDMARKS, Subscriptions Pacman and About Us! pages, are all a brainchild of Akash Maddala.</p>
								<br>
									<h5>Contact : Akash Maddala 
									<br>
										#700 : 700725073
										<br>
										Email : axm50730@ucmo.edu
										<br>
										Phone : (979)969-9077
										</h5>"
										
									];
					
					//looping through the array to display the information
					foreach ($contactArray as $value){
					    echo("<td class='cardStyles'>$value</td>");
					}
					
					?>
						</tr>
					</table>
					
					<p>
						<a href="#Top">Go To Top of the page</a>
					</p>
				</td>
				<!-- Footer -->
				<tr class="trBottomLayout">
					<td class="tdFoot" colspan = "2">
					<!-- Page footer -->
						<p>copyright &copy; Akash Maddala University of Central Missouri &#8482;</p> 
					</td>
			</tr>
		</table>
	
	
	
	</body>
</html>