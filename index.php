<?php
if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $link = mysqli_connect("localhost","root","","assignment2");
  if($link===false){
    die("Could Not Connect".mysqli_connect_error());
  }
  $sql= "INSERT INTO form(firstName,lastName,email,mesage) VALUES ('$fname','$lname','$email','$message')";
  if (mysqli_query($link,$sql)){
    echo "Records Added Successfully!";
  }
  else{
    echo "Could not execute $sql".mysqli_error($link);
  }
mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact-us.css">
</head>

<body>
  <section>
    <div class="upper">
    </div>
    <div class="wrapper" style="background: none;">
      <h1>Contact Us</h1>
      <form action="index.php" method="POST">
        <div class="name">
          <div class="field" id="fname">
            <input type="text1" name="fname" placeholder="First Name" required>
          </div>
          <div class="field" id="lname">
            <input type="text" name="lname" placeholder="Last Name" required>
          </div>
        </div>
        <div class="field">
          <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="field textarea">
          <textarea cols="30" rows="10" name="message" placeholder="Your Message"></textarea>
        </div>
        <div class="btn">
          <button type="submit" name="submit" value="submit">Send</button>
          <a href="login.html"><button type="button" name="login" value="login">Log In</button></a>
        </div>
      </form>
    </div>
    <div class="footer"></div>
  </section>
  <div class="footer"> ® All Rights Reserved 2023</div>
</body>

</html>