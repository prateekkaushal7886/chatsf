<?php







 $myfile = fopen("go.txt", "r") or die("Unable to open file!");
$mob=fgets($myfile);
fclose($myfile);



if($mob==1)
{

ob_start();


$ur="log.php";
header("Location: log11.php");
        ob_end_flush();

}
?>
<script type="text/javascript">
	alert('hi');
</script>

<?php if($mob==2)
{
	
ob_start();


$ur="log.php";
header("Location: log.php");
        ob_end_flush();

}








o

        ?>