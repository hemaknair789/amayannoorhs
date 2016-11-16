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
<div id="header">
	<div id="menu">
		<ul id="main">
			<li><a href="adminhome.php">HOME</a></li>
			<li><a href="login.php">LOG OUT</a></li>

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
				<h1 align="center" class="title"><a href="#" class="style1">Add Student</a></h1>
				<p class="byline"></p>
				<div class="entry">
	
	<?php									//code to insert student details using excel
session_start();
include("Connect.php");
$excel="";
if(isset($_POST['submit']))
{
$excel = $_FILES["upload"]["tmp_name"];
$op = fopen($excel, "r");
$i = 0;
$a="";
while(($row = fgetcsv($op, 1000, ",")) !== false)	//check and read each file row to each variables
{
$admno=$row[0];
$name=$row[1];
$hname=$row[2];
$street=$row[3];
$city=$row[4];
$state=$row[5];
$pin=$row[6];
$dob=$row[7];
$gender=$row[8];
$fname=$row[9];
$mname=$row[10];
$cno=$row[11];
$email=$row[12];
$doa=$row[13];
$class=$row[14];
$div=$row[15];

$q="insert into student(Admno,Name,HouseName,Street,City,State,Pin,Dob,Gender,FathersName,MothersName,ContactNo,Email,DAdmn,Class,Division)values('".$admno."','".$name."','".$hname."','".$street."','".$city."','".$state."','".$pin."','".$dob."','".$gender."','".$fname."','".$mname."','".$cno."','".$email."','".$doa."','".$class."','".$div."')";
$ins=mysql_query($q);
$i=$i+1;
}
if($ins)
	{
		echo "<script>alert('Sucessfully Registered');window.location.href='addstudent.php'; </script>";
	}
	else
	{
		echo "<script>alert('Invalid') </script>";
	
}


}
?>


		<form name="addtudent" method="post" action="" enctype="multipart/form-data">
		
		<table align="right" width="520" border="2">
		<tr><td width="213" height="60"><b>Browse Excel File</b></td>
		<td width="289"> <input type="file" name="upload" /></td></tr>
		<tr>
		      <td>
		        
		        <div align="center">
		          <input type="submit" value="OK" name="submit" class="l"/>
		          </div></td><td><div align="justify"><a href="addstudent.php"><font color="#0066FF"><b>Cancel</b></font></a></div></td></tr>
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
