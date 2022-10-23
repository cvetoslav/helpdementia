<?php
	$servername = "localhost";
    $username = "dementia";
    $password = "IbemS@123";
    $myDb = "helpdementia";
    $conn = new mysqli($servername, $username, $password,$myDb) or die("Connect failed: %s\n". $conn -> error);

    if (mysqli_connect_errno()) {
        exit('Грешка със свързването към БД!');
    }
?>