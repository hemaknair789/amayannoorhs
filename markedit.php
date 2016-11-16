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
<?php
include("Connect.php");
$admno =$_GET["Admno"];		//code to edit student mark for selected admission number and term
$termid =$_GET["TermId"];

$sql = "SELECT s.Admno,s.Name,s.Class,s.Division,r.Admno,r.SubId,r.TermId,t.SubId,t.SubName from student s,mark r,subject t where s.Admno='$admno' and r.TermId='$termid' and s.Admno=r.Admno and r.SubId=t.SubId ";
$result = mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
 while($row = mysql_fetch_array($result))
{
$name=$row["Name"];
$termid=$row["TermId"];
$class=$row["Class"];
$div=$row["Division"];
}
?>
<form name="markedit" method="post" action="">
<div id="header">
	<div id="menu">
		<ul id="main">
			<li><a href="teacherhome.php">HOME</a></li>
			<li><a href="login.php">LOG OUT</a></li>
			<li><?php echo "<a href='termmark.php?Class=$class&Division=$div&TermId=$termid'>BACK</a>";?></li>

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
				<h1 align="center" class="title"><a href="#" class="style1">Edit Marks</a></h1>
				<p class="byline"></p>
				<div class="entry">

<table width="400" height="288" border="2" align="center">
		<tr><td>Admission No</td>
		<td><?php echo $admno; ?></td></tr>
		<tr><td>Name</td><td><?php echo $name; ?></td></tr>
		<tr><td>Class</td><td><?php echo $class; ?></td></tr>
		<tr><td>Division</td><td><?php echo $div; ?></td></tr><p></p>
		<tr><td height="54"><div align="right">Subjects</div><p></p></td></tr>
		<?php
		$i=0;	
$sql = "SELECT s.Admno,s.Name,s.Class,s.Division,r.Admno,r.SubId,r.TermId,r.OMark,r.TMark,t.SubId,t.SubName from student s,mark r,subject t where s.Admno='$admno' and r.TermId='$termid' and s.Admno=r.Admno and r.SubId=t.SubId ";
$result = mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
$o=0;
$t=0;
while($students= mysql_fetch_array($result))
{
	$tm=$students['TMark'];
	echo '<tr>';
	echo "<td>{$students['SubName']}:</td>";
	echo "<td><input type='text' name='text$i' value='".$students['OMark']."'/></td>";	//obtained mark
	echo "<td>/$tm</td>";
	
	$o=$o + $students['OMark'];
	$t=$t + $students['TMark'];
	echo '</tr>';
	$i++;
}
?>
<tr><td>Marks Obtained</td><td><?php echo $o; ?></td></tr>
		<tr><td height="30">Total Marks</td>
		<td><?php echo $t; ?></td></tr><p></p>
<tr><td height="82"><div align="right">
  <input type="submit" value="Edit" name="edit" class="l"/>
</div></td></tr>
<?php
if(isset($_POST['edit']))
{
$i=0;	
$sql = "SELECT s.Admno,s.Name,s.Class,s.Division,r.Admno,r.SubId,r.TermId,r.OMark,r.TMark,t.SubId,t.SubName from student s,mark r,subject t where s.Admno='$admno' and r.TermId='$termid' and s.Admno=r.Admno and r.SubId=t.SubId ";
$result = mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
while($students= mysql_fetch_array($result))
{

	$sid=$students['SubId'];
	$termid=$students['TermId'];
	$admno=$students['Admno'];
	$mrk=$_POST["text$i"];
	 $sql = "UPDATE mark SET OMark ='$mrk' WHERE SubId='$sid' and Admno='$admno' and TermId='$termid'";	//update mark
                       $ins= mysql_query($sql) or die (mysql_error());
	$i++;
}

if($ins)
	{
		echo "<script>alert('Sucessfully Edited');window.location.href='markedit.php?Admno=$admno&TermId=$termid'; </script>";
	}
	else
	{
		echo "<script>alert('Invalid') </script>";
	
}


}
?>
		
  </table>
</form>






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
