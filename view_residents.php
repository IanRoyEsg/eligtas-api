<?php 

$con = mysqli_connect("localhost","root","","brgy-project");

$result = mysqli_query($con,"select * from users ORDER BY id DESC");

$data = [];

while($row = mysqli_fetch_array($result))
{
    extract($row);

    $item = [
        "id"=>$id,
        "firstname"=>$firstname,
        "lastname"=>$lastname,
        "role"=>$role,
        "email"=>$email,
    ];

    array_push($data,$item);
}

echo json_encode($data);

?>