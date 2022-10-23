<?php

session_start();

if(!isset($_SESSION['user_id']))
{
	header("Location: https://helpdementia.ddns.net/");
	exit();
}

$user = $_SESSION['user_id'];

$conn = new mysqli("localhost", 'dementia', "IbemS@123", 'helpdementia');

$sql = "select * from access_rules where name='add_question'";
$res = $conn->query($sql);
$accesslvl = 100;
if($res->num_rows > 0)
{
	$accesslvl = (int)($res->fetch_assoc()['access']);
}

$sql = "select * from users where id={$user}";
$res = $conn->query($sql)->fetch_assoc();

if((int)$res['access'] < $accesslvl)
{
	header("Location: https://helpdementia.ddns.net/");
	exit();
}

$title = $_POST['title'];
$desc = $_POST['desc'];
$type = $_POST['type'];
$ans = $_POST['ans'];
$score = $_POST['score'];

$sql = "insert into questions (title, description, type, answers, score) values ('{$title}', '{$desc}', {$type}, '{$ans}', {$score})";
$res = $conn->query($sql);

header("Location: https://helpdementia.ddns.net/dashboard");
exit();

?>