<?php 

$gettitle = $_POST['title'];
$getcontent = $_POST['content'];
$getuserid = $_POST['userid'];

$con = mysqli_connect("localhost","root","","brgy-project");

$result = mysqli_query($con,"insert into posts(title,content,user_id) values ('$gettitle','$getcontent','$getuserid')");

if($result){
    echo " success ";
}else{
    echo " error ";
}