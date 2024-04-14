<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo"connect successfull";
}else{
    echo"not connected";
}

mysqli_select_db($con, 'clgweb');
$user =$_POST['user'];
$emai =$_POST['email'];
$mobile =$_POST['mobile'];
$address =$_POST['address'];

$query = "insert into userinfodata (user,email,mobile,address )values ('$user','$email','$mobile','$address')";

echo "$querry";


mysqli_query($con,$query);

header ('location: index.php');


?>