<?php
// Start the session

session_start();
$servername = "localhost";
$username = "root";
$password = "";


  $m=$_SESSION['p1'];
 $mo=$_SESSION['p2'];

$q = $_GET["q"];
 
 



 try {
    $conn = new PDO("mysql:host=$servername;dbname=face", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$sql = "INSERT INTO MyGuests (firstname, lastname, email)
    //VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    //$conn->exec($sql);
  $myfile = fopen("west.txt", "r") or die("Unable to open file!");
$iddd=fgets($myfile);
fclose($myfile);


$iddd+=1;
$myfile = fopen("west.txt", "w") or die("Unable to open file!");

fwrite($myfile, $iddd);
fclose($myfile);



     $stmt = $conn->prepare("INSERT INTO data(id,NOTES,MOBILENUMBER,id1) VALUES (:firstname,:surname,:mobilenumber,:id)");  
    $stmt->bindParam("firstname", $iddd,PDO::PARAM_INT) ;
    $stmt->bindParam("surname", $q,PDO::PARAM_STR) ;
    $stmt->bindParam("mobilenumber", $m,PDO::PARAM_STR) ;
     $stmt->bindParam("id", $mo,PDO::PARAM_STR) ;

 $stmt->execute();



    }
catch(PDOException $e)
    {
    echo $stmt . "<br>" . $e->getMessage();
    }











echo $q;






?>