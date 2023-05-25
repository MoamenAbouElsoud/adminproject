<?php  include('connection.php') ;?>
<?php
$query= "select * from product";
$records= mysqli_query ($con,$query);
while ($data= mysqli_fetch_array ($records))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>control</title>
    <link rel ="stylesheet" href= "sheet style.css" >

</head>
<body background-color: coral;>
    <div class="container">
        <div class="content">
<tr>
<td><?php echo $data['ID']; ?></td> 
<td><?php echo $data ['name']; ?></td>
<td><?php echo $data['description']; ?></td>
<td><?php echo $data['color']; ?></td>
<td><?php echo $data['price']; ?></td>
<td><img src=" <?php echo $data['image']; ?>"/> </td>
<td><a href="edit.php?id=<?php echo $data['ID']; ?>">Edit</a></td> 
<td><a href="delete.php?id=<?php echo $data['ID']; ?>">Delete</a></td>
</tr>
</div>
</div>
<?php
}
?>
    <a href="registration.php">registeration<a>
<a href="login.php">log out<a>



</body>
</html>
