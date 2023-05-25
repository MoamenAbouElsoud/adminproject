<?php include('connection.php') ?>

<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_POST['log'])) {
    $email = mysqli_real_escape_string($con, $_POST['em']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

        $sql = "SELECT * FROM sign WHERE `email`='$email' AND `password`='$pass' ";
        $find=mysqli_query($con, $sql);

        if (mysqli_num_rows($find)==1 )
        {
    $_SESSION['email'] = $email;
    $_SESSION['sucess'] = "Welcome Dear";
    header('location:admin.php');
        }
    else{
        echo "wrong data" ;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>log in</title>
    <link rel="stylesheet" href="sheet style.css">
</head>

<body>
    <div class="con">
        <h1>log in</h1>
        
        <div class="contaner">
            </p>
            <form method="post" action="admin.php">
            <div class="input">
                    <label class="title">Email</label><br>
                    <input class="txt" placeholder="Enter your email" type="email" name="em" required><br>
                    <label class="title">Password</label><br>
                    <input class="txt" placeholder="Enter password" type="password" name="pass" required><br>
            </div>
            <div class="input">
            <a href="food/add.php">   
                <input type="submit" id="send"  name="log" type="submit" value="log in"> 
            </a>
            </div>
            </form>
        </div>
    </div>

</body>

</html>