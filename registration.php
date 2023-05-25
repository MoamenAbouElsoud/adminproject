<?php include('connection.php') ; ?>
<?php
if(!isset($_SESSION)) {
   session_start(); }

if (isset($_POST['register'])) {

$username = mysqli_real_escape_string($con, $_POST['un']);
$email=  mysqli_real_escape_string($con, $_POST['em']);
$password = mysqli_real_escape_string($con, $_POST['psw1']);
$password2 = mysqli_real_escape_string($con, $_POST['psw2']);

if ($password !=$password2) {
    echo "Password doesn't Match";
  }
     else { 
      $sql = "INSERT INTO users(name , password , email ) Values ('$username' , '$password' , '$email')";
      mysqli_query($con,$sql);
}
$_SESSION['name'] = $username;
echo "welcome dear " . $_SESSION['name']; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href= "sheet style.css" >
    <title>Regestration form</title>
</head>
<body>
    <header> <h1> Join Us </h1></header>
    <form method="post" action="registration.php">
    
<div class="inp">
          <label> Username</label>
          <input type="text" name="un" required>
</div>
<div class="inp">
          <label>E-mail</label>
          <input type="email" name="em" required>
</div>
<div class="inp">
    <label>password</label>
    <input type="password" name="psw1" required>
</div>
<div class="inp">
    <label>Confirm password</label>
    <input type="password" name="psw2" required>
</div>
<div class="inp">
    <button type="submit" name="register" class="btn" required>Register</button>
</div>
    </form>
</body>
</html>