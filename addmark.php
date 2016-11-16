<?php if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:access.php');
    exit;
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Detachable 
Description: A three-column, fixed-width blog design.
Version    : 1.0
Released   : 20090805

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Amayannoor hs</title>
<script type="text/javascript">
function chk()
{
	var a=document.getElementById("name").value;
	if(a=="")
	{
	document.getElementById("nam").innerHTML="field cannot be empty";	
	}
	else
	{
		document.getElementById("nam").innerHTML="";
	}
}






function chk1()
{
	var x=document.getElementById("email").value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
		document.getElementById("eml").innerHTML="Invalid E-mail ID";
	}
	else
	{
		document.getElementById("eml").innerHTML="";
	}
}		

function chk2(evt)
{
	var e=event||evt;
	var code=e.which || e.keyCode;
	if(code<48||code>57)
	{
	return false;	
	}
}

 function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }





</script>

<meta name="keywords" content="" />
<meta name="Premium Series" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<link href="reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="calendar.js"></script>
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style12 {
	font-size: 18px;
	font-weight: bold;
}
.style13 {font-size: 16px}
-->
</style>
</head>
<body>
<!-- start header -->
<?php				//code to add student marks for the selected admission number and term
$admno=$_GET["Admno"];
$termid =$_GET["TermId"];	
include("Connect.php");
		$s="SELECT * FROM student where Admno='$admno'";
	   $q=mysql_query($s);
	   while($row = mysql_fetch_array($q))
{
$name=$row["Name"];
$class=$row["Class"];
$div=$row["Division"];
}
      
	   $sq1="SELECT * FROM subject";
	   $rc1=mysql_query($sq1);
	   		?>
<form name="addmark" method="post" action="">
<div id="header">
	<div id="menu">
		<ul id="main">
			<li><a href="teacherhome.php">HOME</a></li>
			<li><a href="login.php">LOG OUT</a></li>
			<li><?php echo "<a href='smark1.php?Class=$class&Division=$div&TermId=$termid'>BACK</a>";?></li>

		</ul>
	</div>
	
	
	<div id="logo1">
	
		

		<h1><a href="#"><span> AMAYANNOOR HIGH SCHOOL </span></a></h1>
		<p></p>
	</div>

	

</div>
<!-- end header -->

	<!-- start page -->
	<div id="wrapper">
	<div id="new">
		
	<!-- start page -->
	<div id="cnt1"><div class="post">
		  <h1 align="center" class="title">&nbsp;</h1>
				<h1 align="center" class="title"><a href="#" class="style1">Enter Mark</a></h1>
				<p class="byline"></p>
				<div class="entry">
		
		
		
		<table width="494" height="448" border="2" align="right">
		<tr><td width="164"><b>Admission No</b></td>
		<td width="268"><input type="text" name="admno" size="45" readonly="readonly" value="<?php echo $admno; ?>"/></td></tr>
		<tr><td><b>Name</b></td><td><input type="text" name="name" size="45" readonly="readonly"  value="<?php echo $name; ?>"/></td></tr>
		<tr><td><b>Class</b></td><td><input type="text" name="class" size="45" readonly="readonly"  value="<?php echo $class; ?>"/></td></tr>
		<tr><td><b>Division</b></td><td><input type="text" name="div" size="45" readonly="readonly"  value="<?php echo $div; ?>"/></td></tr>
		
		
		<tr><td><b>Subject</b></td><td><select name="sub">
		<?php			//select subject
		while ($cs2=mysql_fetch_array($rc1)){
		$sub=$cs2[SubName];
		?>
		<option value="<?php print $sub;?>"><?php print $sub;?></option>
		
		<?php }?>
		</select></td></tr>
		
		
		<tr><td><b>Marks Obtained</b></td><td><input type="text" name="mobt" id="name" required onBlur="chk()" onKeyPress="return chk2()" size="45" /></td></tr>
		<tr><td><b>Total Marks</b></td><td><input type="text" name="total" id="name" required onBlur="chk()" onKeyPress="return chk2()" size="45" /></td></tr>
		<tr><td><input type="submit" value="Enter" name="enter" class="l"/></td></tr>
		</table>
		</form>


<?php

if(isset($_POST['enter']))		//add mark
{

$admno=$_POST["admno"];
$sub=$_POST["sub"];
$mobt=$_POST["mobt"];
$total=$_POST["total"];



$r1= "select SubId from subject where SubName='$sub' ";
$rr1=mysql_query($r1);
$m=mysql_fetch_assoc($rr1);
$subid=$m[SubId];

$q="insert into mark(Admno,TermId,SubId,OMark,TMark)values('".$admno."','".$termid."','".$subid."','".$mobt."','".$total."')";
$result = mysql_query($q) or die($q."<br/><br/>".mysql_error());
if($result)
	{
		echo "<script>alert('Sucessfully Added');window.location.href='addmark.php?Admno=$admno&TermId=$termid'; </script>";
	}
	else
	{
		echo "<script>alert('Invalid') </script>";
	
}
}
?>




					<p>&nbsp;</p>
		  </div>
		   </div>
		   
		 </div>
		  
		  
		<!-- end content -->
		
		<div style="clear: both;">&nbsp;</div>
	
	<!-- end page -->
 </div>
		  </div>

<div id="footer">
	<p class="copyright">&copy;&nbsp;&nbsp;2016 All Rights Reserved &nbsp;</p>
	<p class="link"><a href="#">Privacy Policy</a>&nbsp;&#8226;&nbsp;<a href="#">Terms of Use</a></p>
</div>
</body>
</html>
