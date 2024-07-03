<!DOCTYPE html>
<html>
	<head>
	<!-- Created by Akash Maddala-->
	<meta charset = "UTF-8">
	<title>STARDOTCOM</title>
	
	<!-- link to external stylesheets -->
	<link rel = "stylesheet" type="text/css" href = "css/styles.css">
	<link rel = "stylesheet" type="text/css" href = "css/home.css">
	
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
					 <h1>STARDOTCOM</h1>
					  <?php 
					        //include file for getting basic info of website from table
					        include 'inc_queryData.php';
					        
					        //array declared for displaying Thoughts of the day
                            $thoughts = ["Today is a great day to learn something new.",
        					"Every day may not be good. But there is something good in every day.",
        					"Yesterday is gone. Tomorrow has not come yet. We have only today. Let us begin.",
        				    "You only live once. But if you do it right, once is enough."];
					  
					         //generate random number for displaying random thoughts from thoughts array
					         $random = mt_rand(0,sizeof($thoughts)-1);
					  
				             echo("<h3 style='text-align:center; background-color: #d3d3d3;'>Thought for the day: $thoughts[$random]</h3>");
                        ?>
						
					 <h2>OUR INSPIRATION</h2>
					 <!-- Images are displayed on home page -->
					 <table class="tableBorder">
					 	<tr>
					 		<td><img style = "width:300px; height: 300px" src="./images/aryabhata-5 (1).jpg "></td>
					 		<td> <img style = "width:300px; height: 300px" id="imgStyles" src="./images/kepler.jpg "></td>
					 		<td> <img style = "width:300px; height: 300px" id="imgStyles" src="./images/galileo.jpeg "></td>
					 	</tr>
					 	<tr>
					 		<td><h4>Aryabhata</h4></td>
					 		<td><h4>Johannes Kepler</h4></td>
					 		<td><h4>Galileo Galilei</h4></td>
					 	</tr>
					 </table>
					
					<?php 
					    //including file to get vision statement from database
					    include 'inc_visionQueryData.php';
					    
					    //including file to get mission statement from database
                        include 'inc_dbConfig.php';
                        $result;
                        $sql = "SELECT mission from stardotcominfo";
                        $connection = new mysqli($host, $username, $password, $dbname);
                        
                        if($connection->errno){
                            ("connection failed: ". $connection->connect_error);
                            echo("DBMS connect failed - errno: " . $connection->connect_errno . PHP_EOL);
                            die("DBMS connect failed - errno: " . $connection->connect_errno . PHP_EOL);
                         }
                         try{
                             if(!($result = $connection->query($sql)) ){
                                  throw new Exception("Select Query failed" . $connection->error);
                                }
                            }catch (Exception $e){
                            die("Error:  ".$e->getMessage());
                            }
                         while ($row = $result->fetch_assoc()) {
                         print(" <td class='cardTableStyles'><table >
                                <th>
                                Mission Statement
                                </th>
                                <tr>");
                         foreach ($row as $value){
                            print("<td class='cardStyles'>$value</td>");
                         }
                         print("</tr>
                          		</table>
                          		    </td> 
                          		    </td>
                                    </tr>
                                    </table>");
                             }
                          ?>
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