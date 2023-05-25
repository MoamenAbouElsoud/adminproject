<?php  include('connection.php') ;?>
<?php
if(!isset($_SESSION)) {
   session_start(); }

if (isset($_POST['add'])) {
$name = mysqli_real_escape_string($con, $_POST['un']);
$description=mysqli_real_escape_string($con, $_POST['dep']);
$colour = mysqli_real_escape_string($con, $_POST['col']);
$price = mysqli_real_escape_string($con, $_POST['pri']);
$image = mysqli_real_escape_string($con,$_POST['img']);

$sql="INSERT INTO product(name , description , color ,price ,image) Values ('$name','$description','$colour','$price','$image')";
    $add=mysqli_query($con,$sql);
    echo("Data Has Been Successfully added");
}
else{
  echo("Data Has Not Been added");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href= "sheet style.css" >
    <title>Add product</title>
</head>
<body>
    <header> <h1> Add The Product </h1></header>
    <form method="post" action="add product.php">
<div class="inp">
          <label> Name</label>
          <input type="text" name="un" required>
</div>
<div class="inp">
          <label>Description</label>
          <input type="text" name="dep" required>
</div>
<div class="inp">
    <label>colour</label>
    <input type="text" name="col" required>
</div>
<div class="inp">
    <label>price</label>
    <input type="text" name="pri" required>
</div>
<div class="inp">
    <label>Image</label>
    <input type="text" name="img" required>
</div>
<div class="inp">
    <button type="submit" name="add" class="btn" required>Add Product</button>
</div>
    </form>
    <div class="inp">
    <a href="admin.php">admin panel<a>
</div>
</body>
</html>