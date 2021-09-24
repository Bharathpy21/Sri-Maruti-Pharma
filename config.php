<?php 

$con=new mysqli("localhost","root","","SM_Pharma");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>