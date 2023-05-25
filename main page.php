<?php  include('connection.php') ;?>
<?php
$query= "select * from product";
$records= mysqli_query ($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>control</title>
    <link rel ="stylesheet" href= "Accessories.css" >

</head>
<body>
<div class="box1">
        <ul>
            <li><a href="">USD</a>
            <li><a href="">English</a>
            <li><a href="">My Account</a>

        </ul>
        <h5> free shipping on all us orders over $100 </h5>
    </div>


    <div class="box2">
        <Ol>
            <li><a href="">Home</a></li>
            <li><a href="">Shope</a></li>
            <li><a href="">Promotion</a></li>
            <li><a href="">Pages</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Contct</a></li>
        </Ol>
        <div>
            <h2>Rose<font>Bern</font>
            </h2>
        </div>

    </div>
    <a href="registration.php">registeration<a>
</div>

    <h1> All prouducts</h1>
    <?php
    while ($data= mysqli_fetch_array ($records))
    {
        ?>

    <div>
    <?php echo $data ['name']; ?>
    <img src=" <?php echo $data['image']; ?>"  height="290" width="290">
    <?php echo $data['description']; ?>
    <?php echo $data['color']; ?>
    <?php echo $data['price']; ?>
    </div>

   
</div>
</div>
<?php
}
?>
</body>
</html>
