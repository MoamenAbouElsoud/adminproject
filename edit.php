<?php  include('connection.php') ;?>
<?php
$code=$_GET['id'];
$sql="SELECT * FROM `product` WHERE ID= $code";
$qry1= mysqli_query($con, $sql);
$data=mysqli_fetch_array($qry1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE PAGE</title>
</head>
<body>
    <?php
    if (isset($_POST['update']))
    {
        $name = $_POST['name'];
        $color=$_POST['color'];
        $price = $_POST['price'];
        $sql1="UPDATE product SET name= '$name', color= '$color', price= '$price' where ID= '$code'";
        $edit= mysqli_query ($con,$sql1);
        if($edit)
        {
            mysqli_close($con);
            header("location:admin.php");
        }
        else{
            echo mysqli_error();
        }
    }
    ?>
    <h1>Update Data</h1>

<form method="POST">

<input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter Product Name "Required>
<input type="text" name="color" value="<?php echo $data['color'] ?>"placeholder="Enter color" Required> >
<input type="text" name="price" value="<?php echo $data['price']?>" placeholder="Enter price value" Required>>
<input type="submit" name="update" value="Update">

</form>
    
</body>
</html>