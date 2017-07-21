<?php
// Start the session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
 $p2id = $_POST['notes'];
 $servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=face", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql1 = "SELECT ID,MOBILENUMBER,FIRSTNAME FROM account ";
$a=0;
foreach ($conn->query($sql1) as $row) {
if($p2id==$row['ID'])
	$a=1;
}


if($a==0)
{
	ob_start();
    header("Location: chat1.php");
        ob_end_flush();
}
   else
   {
    $_SESSION['p2'] = $p2id;
    ob_start();
    header("Location: log1.php");
        ob_end_flush();
    }
}
        ?>
