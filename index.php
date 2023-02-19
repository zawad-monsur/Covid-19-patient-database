<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>COVID Patient DataBase</title>
		<link rel="stylesheet" href="css/semantic.min.css">
		<?php 
			require_once('db_config.php'); 
		?>
	</head>
	<body>
		COVID-19 PATIENT DATABASE
		</br>
	</body>
	<body>
		
		<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

			$query = "SELECT * FROM patient";

		 	$query1 = "SELECT COUNT(patient_id) FROM patient";
		 	$query2 = "SELECT COUNT(recovery_date) FROM date";
		 	$query3 = "SELECT COUNT(death_date) FROM date";
		?>

		<?php

				$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

		?>

	
		
		<div class= "ui grid">
			<div class= "ui four wide column" style="background: gray; min-height :70vh; ">
				<img src="">
				<div style = "background: gray; padding: 25px;">
					<h2>COVID-19 PATIENT DATABASE</h2>
				</div>
				<div style="background: gray; padding: 30px;">
					<a href="add_form.html"><button class="ui fluid button">ADD DATA</button></a>
					<br>
					<form class ="ui form" method= "post" action = "searchresult.php">
				
						<div>
						 	<input type="text" name="search_query" placeholder="Search">
						</div>
						<br>

						<button class="ui button" type="submit">Search</button>
						<br>
						<br>
						<?php
                         /*$result1 = $conn->query($query1);
                         $result2 = $conn->query($query2);
                         $result3 = $conn->query($query3);
                         $row2 = $result1->fetch_assoc();
                         $row3 = $result2->fetch_assoc();
                         $row4 = $result3->fetch_assoc();
                         //$row5= 15;*/
                        
                         /*print_r ($row2);
                         printf("\n");
                         print_r ($row3);
                         printf("\n");
                      	 print_r ($row4);
                         printf("\n");
                         //echo $row2;*/
                         //printf("Total patient : %u", $row5);$sql="SELECT COUNT(patient_id) FROM patient";
                            $sql="SELECT COUNT(patient_id) FROM patient";
							$result=mysqli_query($conn,$sql);
							$row=mysqli_fetch_array($result);
							echo "Total Patient $row[0]";
							printf("\n");


							$sql1="SELECT COUNT(recovery_date) FROM date";
							$result1=mysqli_query($conn,$sql1);
							$row1=mysqli_fetch_array($result1);
							echo "Total Recovered $row1[0]";
							printf("\n");

							$sql2="SELECT COUNT(death_date) FROM date";
							$result2=mysqli_query($conn,$sql2);
							$row2=mysqli_fetch_array($result2);
							echo "Total Died $row2[0]";
                       

                    ?> 
                     


					

					</form>
				</div>
			</div>

			<div class= "ui twelve wide column ">
				<style>
					div {
					  background-image: url(fjGlXJ.jpg);
					}
				</style>

				<div class="ui text container" style="padding-top: 50px; ">

					<body>
							<?php

	 							$conn = new mysqli($servername, $username, $password, $dbname);
								if ($conn->connect_errno) {
						    			printf("Connect failed: %s\n", $conn->connect_error);
						    		exit();
								}

							 	$query = "SELECT * FROM patient";
							?>

							

							
							
					 		
							<table class="ui celled unstackable table" style="width: 70%">

								<t1>Patient Table</t2>

								<thead>

								<tr>

									<th>Patient ID</th>
									<th>Gender</th>
									<th>Treatment Id</th>
									<th>Age</th>
									<th>Blood Group</th>
									<th>Other Diseases</th>
									<th>Option</th>

									
							
								</thead>

								
								<tbody>
								
								<?php
									if ($result = $conn->query($query)) {
										$ser = 1;
										while ($row = $result->fetch_assoc()){
											printf("<tr>");
											printf("<td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td><td> <a href='db/delete.php?patient_id=%s'>Delete</a>/<a href='edit_form.php?patient_id=%s'>Edit</a> </td>", $ser,$row["gender"],$row["treatment_id"],$row["age"],$row["blood_group"],$row["other_diseases"],$row["patient_id"],$row["patient_id"]);
											printf("</tr>");
											$ser++;
										}
									}
								?>
								</tbody>
							</table>



						    <!-- Rest of the page content -->
						<script src="js/jquery-3.4.1.min.js"></script>
					  	<script src="js/semantic.min.js"></script>
					  	
					</body>
					

				</div>	

			</div>
 		
		</div>

</html>