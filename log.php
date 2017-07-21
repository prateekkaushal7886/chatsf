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
            

function goNewWin() {

//***Get what is below onto one line***

window.open("backbuttonnewpage.html",'TheNewpop','toolbar=1,location=1,directories=1,status=1,menubar=1,scrollbars=1,resizable=1'); 

//***Get what is above onto one line*** 

self.close()

}


            
        </script>
    </head>
    <body onLoad="goNewWin()">

 
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

    	<form action="log1.php" method="post">    
<h2>CREATE NEW NOTES:</h2>
    	<input type="text" name="notes" size="50" placeholder="ENTER NOTES"><br />
    	<input type="submit" name="submit" value="CREATE"  >
    </form>

 <br /><br /><br /><br /><br /><br />
    
    <form action="log2.php" method="post">   
<h2>DELETE NOTES:</h2>
    	<input type="text" name="notes1" size="50" placeholder="ENTER ID OF NOTES YOU WANT TO DELETE"><br />
    	<input type="submit" name="submit" value="DELETE">
    </form>
   

   </div> 

    <div class="not">
    <h2>NOTES</h2>
    <br />
    	<?php


    $sql1 = "SELECT id,MOBILENUMBER,NOTES FROM data where MOBILENUMBER=$mobile";
   
    echo "<table border='2px' width='600'>";
    echo "<tr><td><strong>ID</strong></td><td><strong>NOTES</strong></td></tr>";
    foreach ($conn->query($sql1) as $row) {
echo "<tr><td>";

       print $row['id'];

       echo "</td><td>";
       print $row['NOTES'];
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