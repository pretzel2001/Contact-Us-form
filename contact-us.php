<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Home Page</title>
	<link rel="stylesheet" href="table.css">
</head>
<body>
	<main class="table">
		<section class="table_header">
			<h1>Contact Form Messages</h1>
		</section>
		<section class="table_body" id="content">
			<table>
				<thead>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Messages</th>
					</tr>
				</thead>
				<tbody>
				</tr>
				<?php
				$server = "localhost"; 
  $username = "root";
  $password = "";
  $db = "assignment2";
  $con = mysqli_connect($server, $username, $password, $db);
  if (!$con) {
    die("Connection to database failed due to " . mysqli_connect_error());
  }
                $sql = "SELECT * FROM `form`";
         
                $result=$con->query($sql);
                if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr><td data-label='First Name:'>" .$row["firstName"]. "</td><td data-label='Last Name: '> " . $row["lastName"]."</td><td data-label='Email: '> ". $row["email"]. "</td><td data-label='Messages: '> ". $row["mesage"]."</td><tr> ";
                    }
                    
                }else{
                    echo "no result";
                }
                $con->close();
            ?>
				
				</tbody>
			</table>
		</section>
	</main>
</body>
</html>