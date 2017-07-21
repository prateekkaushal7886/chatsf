<?php
session_start();
$myfile = fopen("go.txt", "w") or die("Unable to open file!");
$mobil=2;
fwrite($myfile, $mobil);
fclose($myfile);

?>

    <!DOCTYPE html>
    <html>
    <head>
    	<title></title>
    	<link rel="stylesheet" type="text/css" href="p.css">

        <script type="text/javascript">
             function script() {
               //location.reload();
               location.reload();
            }
            
    
        </script>
    </head>
    <body >

 
   <script type="text/javascript">
         <!--
            function Redirect() {
               window.location="index.php";
              // location.reload();
            }
           
         //-->
         
      </script> 
    

<?php
if (1) {
 	$mobile=$_SESSION["phone"];
    $pass=$_SESSION["password"];

    $myfile = fopen("mob.txt", "w") or die("Unable to open file!");

fwrite($myfile, $mobile);
fclose($myfile);
    
    $servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=face", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "WELCOME";

    $sql = "SELECT FIRSTNAME,SURNAME,MOBILENUMBER,PASSWORD,DAY,MONTH,YEAR,SEX FROM account where MOBILENUMBER=$mobile";
    foreach ($conn->query($sql) as $row) {
       /* print $row['FIRSTNAME'] . "<br />";
        print $row['SURNAME'] . "<br />";
        print $row['SEX'] . "\n";*/
   
}
}
    ?>

    <div class="me">    
  
    
    	<h2 class="wel">
    		<?php
    		 foreach ($conn->query($sql) as $row) {
       		print "WELCOME ".$row['FIRSTNAME']."!!!" ;
       
   
			}
    		?>
    	</h2>
    	
    	<div class="t11">
    	<table cellpadding="2px" class="t1" border="2px">


<tr>
    			<td>NAME:</td><td>
    				<?php

foreach ($conn->query($sql) as $row) {
       print $row['FIRSTNAME'] . " ";
        print $row['SURNAME'] . " ";
       /* print $row['SEX'] . "\n";*/
   
}

    				?>
    				
    			</td>
    		</tr>











    		<tr>
    			<td>MOBILE NUMBER:</td><td>
    				<?php

foreach ($conn->query($sql) as $row) {
       print $row['MOBILENUMBER'] . " ";
       
       /* print $row['SEX'] . "\n";*/
   
}

    				?>
    				
    			</td>
    		</tr>

<tr>
    			<td>DATE OF BIRTH:</td><td>
    				<?php

foreach ($conn->query($sql) as $row) {
       print $row['DAY'] . " ";
        print $row['MONTH'] . " ";
        print $row['YEAR'] . "";
   
}

    				?>
    				
    			</td>
    		</tr>


    		<tr>
    			<td>GENDER:</td><td>
    				<?php

foreach ($conn->query($sql) as $row) {
       print $row['SEX'] . " ";
        
       /* print $row['SEX'] . "\n";*/
   
}

    				?>
    				
    			</td>
    		</tr>

    		
    	</table>
        
        <div class="ll"><form method="post" action="log3.php"> <input type="submit" name="tf" value="LOG OUT" ></form></div>
  </div> 
  </div> 



<div class="neww">

      <form action="chat2.php" method="post">    
<h2>ENTER ID OF PERSON YOU WANT TO CHAT WITH:</h2>
      <input type="text" name="notes" size="50" placeholder=" ID"><br />
      <input type="submit" name="submit" value="CREATE"  >
    </form>

 <br /><br /><br /><br /><br /><br />
    
  
   </div> 











    <div class="not">
    <h2>NOTES</h2>
    <br />
    	<?php


    $sql1 = "SELECT id,MOBILENUMBER,NOTES FROM data where MOBILENUMBER=$mobile";
   $sql2 = "SELECT FIRSTNAME,SURNAME,MOBILENUMBER,PASSWORD,DAY,MONTH,YEAR,SEX,ID FROM account";
    echo "<table border='2px' width='600'>";
    echo "<tr><td><strong>ID</strong></td><td><strong>NAME</strong></td></tr>";
    foreach ($conn->query($sql2) as $row) {
echo "<tr><td>";

       print $row['ID'];

       echo "</td><td>";
       print $row['FIRSTNAME'];
        print " ";
        print $row['SURNAME'];
        //print $row['SEX'] . "\n";
   echo "</td></tr>";
}
echo "</table>";





    	?>
        <br /><br />
    </div>



<script type="text/javascript" src="js2.js"></script>
<script type="text/javascript" src="jaz.js"></script>





    </body>
    </html>