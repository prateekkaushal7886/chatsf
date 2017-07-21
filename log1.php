







<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="p1.css">
</head>
<body>
<input type="submit" value="END CHAT" class="b4" onclick="Redirect();" />
 

<br /><br />
<h2>YOUR CHAT:</h2>
    <div id="ch"></div>
    <br /><br /><br /><br /><br /><br />
<h2 id="v">ENTER THE MESSAGE:</h2>
<br />
         <form >    

      <input type="text"  id="mess" name="q"   size="50" placeholder=" MESSAGE"><br />
      <input type="button" name="button" value="CLICK ME(TO SEND)" id="sub" >
    </form>

<script type="text/javascript" src="js2.js"></script>



<script type="text/javascript">

 function Redirect() {
               window.location="chat1.php";
            }
function mychat()
{
  var x="p";
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ch").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "chat4.php?q=" + x, true);
        xmlhttp.send();
}



  $(document).ready(

function()
{
  mychat();
}
    );



$("#sub").click(

function()
{

var x=$("#mess").val();
var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("io").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "chat3.php?q=" + x, true);
        xmlhttp.send();
        mychat();


}
  );
setInterval(function(){
  
    mychat() ;
}, 1000);


$('#mess').keydown(function(event){ 
    var keyCode = (event.keyCode ? event.keyCode : event.which);   
    if (keyCode == 13) {
        

var x=$(this).val();
var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("io").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "chat3.php?q=" + x, true);
        xmlhttp.send();
        mychat();

        event.preventDefault();

    }
});

</script>


</body>
</html>