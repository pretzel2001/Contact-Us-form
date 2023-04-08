<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "assignment2";

$link = mysqli_connect("localhost","admin","admin","assignment2");
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT firstName, lastName, email, mesage FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "First Name: " . $row["firstName"]. " - Last Name: " . $row["lastName"]. " - Email: " . $row["email"]  . " - Message: " . $row["mesage"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section>
        <div class="login">
            <h2>LOG IN</h2>
            <form action="#" method="POST">
                <div class="field" >
                    <input type="text" name="username" placeholder="Username" required>
                  </div>
                  <div class="field">
                    <input type="text" name="password" placeholder="Password" required>
                  </div>
                  <div class="btn">
                    <button type="submit" name="login" value="login">Log In</button>
                  </div>
            </form>
        </div>
    </section>
</body>
</html>