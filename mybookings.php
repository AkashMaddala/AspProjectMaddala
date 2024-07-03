
<!DOCTYPE html>
<html>
	<head>
	<!-- Created by Akash Maddala-->
	<meta charset = "UTF-8">
	<title>STARDOTCOM</title>
	<link rel = "stylesheet" type="text/css" href = "css/styles.css">
	<link rel = "stylesheet" type="text/css" href = "css/bookings.css">
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
				<a href = "viewbookings.php" class="linkStyling"> View all bookings </a>
				<br>
				<br>
					
					
					<div class="container" id="detailsForm">
					<h2 class="my-4">View your seminar bookings here</h2>
					
					<div class="d-flex">
					<form  method="post" action = "#">
					
					 	
				
                        
                         <div class="divFormStyles">
                                <label class="emailStyle">Enter Your Email ID:</label>
                                <input type="text" name="email" class="" value="<?php if(isset($_POST['myBooking'])){
								    
                                    echo( trim($_POST['email']));
								}
								?>"	placeholder="Email" required />
                        </div>
                        
                        <br>
                        
                       
                     
                        <input type="submit" value='View My Bookings' name = "myBooking" class="btn btn-primary">
                        
					</form>
			
				
					</div>
					</div>
					
					<?php 
					
					if(isset($_POST['myBooking'])){
					    
					  
					    include("inc_validate.php");
					    
					               $email = $_POST["email"];
					                 
					                               include 'inc_getMyBookings.php';
			
					
					    
					}
					
					?>

					<input type="submit" value='Cancel' name = "myBooking" class="btn btn-primary">
			
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