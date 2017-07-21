<?php
session_start();
 $servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=face", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "WELCOME";
$q = $_GET["q"];
 $m=$_SESSION['p1'];
 $mo=$_SESSION['p2'];

 $sql1 = "SELECT ID,MOBILENUMBER,FIRSTNAME FROM account where MOBILENUMBER=$m ";
 $sql2 = "SELECT ID,MOBILENUMBER,FIRSTNAME FROM account where ID=$mo ";
 foreach ($conn->query($sql1) as $row) {
$m1=$row['ID'];
$m2=$row['FIRSTNAME'];
 }
 foreach ($conn->query($sql2) as $row) {
$mo1=$row['MOBILENUMBER'];
$mo2=$row['FIRSTNAME'];
 }


 $sql = "SELECT id,MOBILENUMBER,NOTES,id1 FROM data where (MOBILENUMBER=$m AND id1=$mo) OR (MOBILENUMBER=$mo1 AND id1=$m1)";

echo "<table  width='600'>";
    echo "<tr><td><strong>ID</strong></td><td><strong>NOTES</strong></td></tr>";
    foreach ($conn->query($sql) as $row) {
echo "<tr><td>";
if($row['MOBILENUMBER']==$m)
       print $m2;
   else
   	print $mo2;

       echo "</td><td>";
       print $row['NOTES'];
        //print $row['SEX'] . "\n";
   echo "</td></tr>";
}
echo "</table>";









?>