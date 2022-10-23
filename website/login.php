<?php

session_start();

if(isset($_SESSION['user_id']))
{
	header("Location: https://helpdementia.ddns.net/");
	exit();
}

$username = $_POST['user'];
$pass = hash('sha256', $_POST['pass']);

$conn = new mysqli("localhost", 'dementia', "IbemS@123", 'helpdementia');
$sql = "select * from users where username='{$username}' or email='{$username}'";
$res = $conn->query($sql);

if ($res->num_rows > 0)
{
	$res = $res->fetch_assoc();
	if($res['passhash'] == $pass)
	{
		$_SESSION['user_id'] = $res['id'];
		header("Location: https://helpdementia.ddns.net/dashboard");
		exit();
	}
	$_SESSION['msg'] = 1;
	header("Location: https://helpdementia.ddns.net/");
	exit();
}

$_SESSION['msg'] = 2;
header("Location: https://helpdementia.ddns.net/");
exit();

?>