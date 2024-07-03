<!DOCTYPE html>
<html>
	<head>
	<!-- Created by Akash Maddala-->
	<meta charset = "UTF-8">
	<title>STARDOTCOM</title>
	<link rel = "stylesheet" type="text/css" href = "css/styles.css">
<!-- 	<script type="text/javascript" src="Landmarks.js"></script> -->
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
                       		 	<a href="index.php">Banking</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="ViewCustomers.php">Customer Details</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="Transfer.php">Fund Transfer</a>
                    		</li>
                    		<li class="li-style">
                       		 	<a href="RecordsPage.php">Transaction History</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="Aboutus.php">About Us</a>
                    		</li>
						</ul>

					</nav>
				</td>
				<!-- main content -->
				<td class="tdRightLayout">
				<h1>LANDMARKS!</h1>
					<h3>If you're looking for Martian real estate, you're in the right spot.</h3>
					<h3>Choose your spots now from the original Mars orbital image (HiRISE) labeled data set, today! Contribute to Science by naming your Landmark on Mars!</h3>
					<p>
					<h5>This data set contains a total of 73,031 landmarks. 10,433 landmarks were detected and extracted from 180 HiRISE browse images, and 62,598 landmarks were augmented from 10,433 original landmarks. For each original landmark, we cropped a square bounding box that includes the full extent of the landmark plus a 30-pixel margin to left, right, top and bottom. Each cropped landmark was resized to 227x227 pixels, and then was augmented to generate 6 additional landmarks using the following methods:
					<ol>
						<li>90 degrees clockwise rotation</li>
						<li>180 degrees clockwise rotation</li>
						<li>270 degrees clockwise rotation</li>
						<li>Horizontal flip</li>
						<li>Vertical flip</li>
						<li>Random brightness adjustment</li>
					</ol>
				<form action="" method="post">
				<table>
					<tr>					
						<td>
							<?php  
									$random;
									$randomArray =[];
									for ($i=1;$i<9;$i++){
										$random = mt_rand(1,336);
										array_push($randomArray, $random);
										
										print ("<img style = 'width: 200px; height: 200px' src='./images/Highrise/M$random.jpg' />");
										print("<input type='checkbox' name ='myCheckbox$random'  id='myCheckbox$random' /><label for='myCheckbox$random'>M$random</label>");
									}
									
									
							?>
						</td>
					</tr>
				</table>
				<p id="result"></p>
				
				<p><input type='submit' name = "buyButton" class="btn btn-primary" id='buyButton' value="BUY"></p>
				</form>
				<?php 
				
				if(isset($_POST['buyButton'])){
				    
// 				   
				    
				        
				      
				            echo("<h4 class='py-5 purple text-xenter'>Congratulations on your Landmarks! You just bought the selected items and contributed to science.</h4>");
				        
				    
				        
				    
				      
				    
				}?>
					<h6>Citation : DOI: 10.5281/zenodo.2538136
						Authors: Kiri L. Wagstaff, Steven Lu, Gary Doran, Lukas Mandrake
						Contact: you.lu@jpl.nasa.gov</h6>
					</p>
					
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