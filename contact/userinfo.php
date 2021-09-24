<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo"Thankyou for contacting us!";
}
else{
    echo"No connection";
}

mysqli_select_db($con,'smp_info');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "insert into contactusdata (name,phone,email,message)
values ('$name','$phone','$email','$message')";

echo "$query";

mysqli_query($con, $query);

?>


