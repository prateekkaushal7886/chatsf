




<?php
// Start the session
session_start();
$myfile = fopen("go.txt", "w") or die("Unable to open file!");
$mobil=1;
fwrite($myfile, $mobil);
fclose($myfile);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Spring Fest</title>
    <link rel="stylesheet" type="text/css" href="ind.css">
</head>
<body>
<?php
ob_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile=$_POST['phone'];
    $pass=$_POST['password'];
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=face", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $sql = "SELECT FIRSTNAME,SURNAME,MOBILENUMBER,PASSWORD,DAY,MONTH,YEAR,SEX FROM account where MOBILENUMBER=$mobile";
    foreach ($conn->query($sql) as $row) {
       $ch= $row['PASSWORD'] ;
       }

if($pass==$ch)
{
    $_SESSION["phone"] = $mobile;
$_SESSION["password"] = $pass;
$_SESSION["p1"] = $mobile;
$_SESSION["p2"] = "";


$ur="log.php";
header("Location: chat1.php");
        ob_end_flush();
}
else
{
  header("Location: index2.php");
        ob_end_flush();  
}






}ob_end_flush();

?>
<h1>CLOUDY NOTES</h1>

<div class="in">

<form class="b" action="index.php" method="post">
     <table class="b1" cellpadding="3" >

       <tr><td> <h2>SIGN IN</h2></td></tr>
        <tr class="b3">
            <td><input type="text" name="phone" size="20" placeholder=" USERNAME"></td> </tr><tr> 
            <td><input type="password" name="password" size="20" placeholder=" PASSWORD"></td> </tr><tr> 
            <td class="b6"><input type="submit" value="Log in" class="b4" /></td>
        </tr>

        
    </table> 
</form>
</div>







<div class="right">
    
<h2>SIGN UP</h2>

<form class="r" action="account.php" method="post">
    <input type="text" placeholder=" First Name" class="g" name="firstname"/>
    <input type="text"  placeholder=" Surname" class="g" name="surname" />
    <br /><br />
    <input type="text"  placeholder=" Username" class="g" size="48" name="mobile" />
    <br /><br />
    <input type="password"  placeholder=" New password" class="g" size="48" name="password" />
    <br />
    <br />
    <h3>Birthday</h3>
    <div class="z1">

<select name="Day" class="aaa" value="Day" >
<option class="aa">Day</option>
<option class="aa">1</option><option class="aa">2</option><option class="aa">3</option><option class="aa">4</option><option class="aa">5</option><option class="aa">6</option><option class="aa">7</option><option class="aa">8</option><option class="aa">9</option><option class="aa">10</option><option class="aa">11</option><option class="aa">12</option><option class="aa">13</option><option class="aa">14</option><option class="aa">15</option><option class="aa">16</option><option class="aa">17</option><option class="aa">18</option><option class="aa">19</option><option class="aa">20</option><option class="aa">21</option><option class="aa">22</option><option class="aa">23</option><option class="aa">24</option><option class="aa">25</option><option class="aa">26</option><option class="aa">27</option><option class="aa">28</option><option class="aa">29</option><option class="aa">30</option><option class="aa">31</option>

</select>
<select name="month" value="month" class="aaa" >
    <option class="aa">Month</option><option class="aa">Jan</option><option class="aa">Feb</option><option class="aa">Mar</option><option class="aa">Apr</option><option class="aa">May</option><option class="aa">Jun</option><option class="aa">Jul</option><option class="aa">Aug</option><option class="aa">Sep</option><option class="aa">Oct</option><option class="aa">Nov</option><option class="aa">Dec</option>
</select>
<select class="aaa" name="year" value="year">
    <option class="aa">Year</option>
    <option class="aa">1990</option>
    <option class="aa">1991</option>
    <option class="aa">1992</option>
    <option class="aa">1993</option>
    <option class="aa">1994</option>
    <option class="aa">1995</option>
    <option class="aa">1996</option>
    <option class="aa">1997</option>
    <option class="aa">1998</option>
    <option class="aa">1999</option>
    <option class="aa">2000</option>
</select>
</div>
<br />
<div id="sex">
Male:<input type="radio" name="sex" value="male"/>
Female:<input type="radio" name="sex" value="female">
</div>

<div id="l">
<input type="submit" value="SIGN UP" class="z3"><br /><br />
</div>
<
</form>

</div>

<script type="text/javascript" src="js2.js"></script>


</body>
<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
</html>