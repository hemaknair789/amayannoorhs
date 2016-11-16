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
<div id="header">
	<div id="menu">
		<ul id="main">
			<li><a href="officehome.php">HOME</a></li>
			<li><a href="login.php">LOG OUT</a></li>
			<li><a href="slist1.php">BACK</a></li>

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
	<div id="cnt2"><div class="post">
		  <h1 align="center" class="title">&nbsp;</h1>
				<h1 align="right" class="title"><a href="#" class="style1">Student List</a></h1>
				<p class="byline1" align="left"></p>
				<div class="entry">
<?php
include("Connect.php");
$c =$_GET["Class"];
$d =$_GET["Division"];
echo "<form action='' method='post'>";
echo "<table border='0' align='left' width='1000' >
<tr>
<th>Admission No</th>
<th>Name</th>
<th>Class</th>
<th>Division</th>
<th>Fathers Name</th>
<th>Mothers Name</th>
<th>Date of Birth</th>
<th>Contact No</th>
</tr>";
$sql = "SELECT * FROM student where Class='$c' and Division='$d' ";		//select students of requested class and division
$result = mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
while ($students = mysql_fetch_array($result)) {
	echo '<tr>';
	echo "<td>{$students['Admno']}</td>";	
	echo "<td>{$students['Name']}</td>";
	echo "<td>{$students['Class']}</td>";
	echo "<td>{$students['Division']}</td>";
	echo "<td>{$students['FathersName']}</td>";
	echo "<td>{$students['MothersName']}</td>";
	echo "<td>{$students['Dob']}</td>";
	echo "<td>{$students['ContactNo']}</td>";
	echo '</tr>';
}



echo '<tr>';
echo "<td><input type='submit' name='print' value='Print' class='l' /></td>";
echo '</tr>';
echo "</table>";

if(isset($_POST['print']))
{
$url = "printstudent.php?Class=".$c."&Division=".$d; 
     header("Location: $url");
}
echo "</form>";
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
