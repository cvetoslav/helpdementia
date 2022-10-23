<?php

session_start();

if(isset($_SESSION['user_id']))
{
	header("Location: https://helpdementia.ddns.net/");
	exit();
}

$pass = hash('sha256', $_POST['pass']);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$email = $_POST['email'];
$username = $email; //$_POST['user'];
$access = 1;

$conn = new mysqli("localhost", 'dementia', "IbemS@123", 'helpdementia');
$sql = "select * from users where username='{$username}' or email='{$email}'";
$res = $conn->query($sql);

if ($res->num_rows > 0)
{
	$_SESSION['msg_r'] = 1;
	header("Location: https://helpdementia.ddns.net/");
	exit();
}

$sql = "insert into users (username, passhash, first_name, last_name, email, age, access, enabled) values ('{$username}', '{$pass}', '{$fname}', '{$lname}', '{$email}', {$age}, 1, 1)";
$res = $conn->query($sql);

$sql = "select * from users where username='{$username}'";
$res = $conn->query($sql);

$_SESSION['user_id'] = $res->fetch_assoc()['id'];

header("Location: https://helpdementia.ddns.net/dashboard");
exit();

?>