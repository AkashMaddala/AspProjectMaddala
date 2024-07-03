<!DOCTYPE html>
<html>
	<head>
	<!-- Created by Akash Maddala-->
	<meta charset = "UTF-8">
	<title>STARDOTCOM</title>
	<link rel = "stylesheet" type="text/css" href = "css/styles.css">
	<link rel = "stylesheet" type="text/css" href = "css/Gaming.css">

	<!-- Link to javaScript file -->

	<script type = "text/javascript" src="Gaming.js"></script>
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
					<h1>Rock Paper Scissors</h1>
					
					<ol> Rules of the game
						<li>Please select one among rock, paper, scissor. Rock crushes scissors, scissors cut paper, and paper covers rock. See who wins each round!</li>
						<li>You are going to play with the computer and you have 10 moves to win the game.</li>
					</ol>
					<br>
					<div class="gameStyles">
						<p>
							<label ><b>Player Score:</b></label>
							<label id="playersScore"></label>
							<label ><b>Computer Score:</b></label>
							<label id="computerScore"></label>
						</p>
						<b id="winningResult"></b>
						<p>
						<table style=" margin-left: auto;
  margin-right: auto;">
							<tr>
								<td>
									<img style = "width:100px; height: 100px" src="./images/rock.png ">
								</td>
					 		
					 			<td>
					 			 <img style = "width:100px; height: 100px" id="imgStyles" src="./images/paper2.png ">
								</td>
								<td> 
								<img style = "width:100px; height: 100px" id="imgStyles" src="./images/scissors.png ">
								</td>
							</tr>
							<tr>
								<td><input type="button"  class="btn btn-primary" id="rockButton" value="Rock"></td>
								<td><input type="button"  class="btn btn-primary" id="paperButton" value="Paper"></td>
								<td><input type="button" class="btn btn-primary" id="scissorButton" value="Scissor"></td>
							</tr>
						</table>
						<p id="winResult"></p>
					 </div>
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