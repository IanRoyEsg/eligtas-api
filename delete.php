<?php 

$getid = $_POST['id'];

$con = mysqli_connect("localhost","root","","brgy-project");

$result = mysqli_query($con,"delete from posts where id = $getid");

if($result)
{
    echo"Deleted";
}else{
    echo"fail";
}

?>