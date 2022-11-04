<?php 

$getid = $_POST['id'];
$gettitle = $_POST['title'];
$getcontent = $_POST['content'];
$getuserid = $_POST['userid'];

$con = mysqli_connect("localhost","root","","brgy-project");

$result = mysqli_query($con,"UPDATE `posts` SET title = '$gettitle', content = '$getcontent', user_id ='$getuserid' WHERE posts.id = $getid;");

if($result){
    echo " Updated ";
}else{
    echo " error ";
}