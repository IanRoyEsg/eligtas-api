<?php 

$con = mysqli_connect("localhost","root","","brgy-project");

$result = mysqli_query($con,"select * from posts ORDER BY id DESC");

$data = [];

while($row = mysqli_fetch_array($result))
{
    extract($row);

    $item = [
        "id"=>$id,
        "title"=>$title,
        "content"=>$content,
        "user_id"=>$user_id
    ];

    array_push($data,$item);
}

echo json_encode($data);

?>