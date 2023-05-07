
<?php
$servername = "localhost";

$username ="id20714674_soul";

$password ="Cure4soul@alaa";

$dbname="id20714674_cure";
$conn= mysqli_connect ($servername,$username ,$password ,$dbname);
if (!$conn)
{
	die ("connectionfailed:" .mysqli_connect_error());
	}
else
{
	echo "connected sucessfully";
}
?>