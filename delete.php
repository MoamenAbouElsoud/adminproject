<?php
include('connection.php') ;
$code= $_GET['id'];
$query="DELETE from product where ID='$code'";
$del=mysqli_query($con,$query);
if($del)
{
    mysqli_close($con);
    header("location:admin.php");
    
}
else{
    echo "Erorr deleting record";
}
?>