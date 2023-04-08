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
      <h2>LOGIN</h2>
      <form action="#" method="POST">
        <div class="field">
          <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="field">
          <input type="text" name="password" placeholder="Password" required>
        </div>
        <div class="btn">
          <button type="submit" name="login" value="login">Log In</button>
        </div>
        <div>
          <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $server = "localhost";
            $username = "root";
            $password = "";
            $db = "assignment2";
            $con = mysqli_connect($server, $username, $password, $db);
            if (!$con) {
              die("Connection to database failed due to " . mysqli_connect_error());
            }
            $userName = $_POST['username'];
            $Pass = $_POST['password'];

            $sql = "SELECT * FROM `user` where `username` ='$userName' and `password` ='$Pass'";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
              header('Location: contact-us.php');
            } else {
              echo "Username or Password is incorrect";
              header('Location: login.php');
            }
          }
          ?>
        </div>
      </form>
    </div>
  </section>
</body>

</html>