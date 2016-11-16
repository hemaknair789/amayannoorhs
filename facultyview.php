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
			<li><a href="faculty.php">BACK</a></li>

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
				<h1 align="center" class="title"><a href="#" class="style1"></a></h1>
				
				<div class="entry">
	
	
					<?php		//to view faculty details
$tid=$_GET["Tid"];
include("Connect.php");

$query = "select * from staff where Tid='$tid' ";
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {

  $name=$row["Name"];
  $hname=$row["HouseName"];
$street=$row["Street"];
$city=$row["City"];
$state=$row["State"];
$pin=$row["Pin"];
$dob=$row["Dob"];
$doj=$row["Doj"];
$mobile=$row["Mobile"];
$email=$row["Email"];
$qual=$row["Qualification"];
$desig=$row["Designation"];
$photo=$row["Photo"];

}

?>


		
		<form name="staffedit" method="post" action="" enctype="multipart/form-data">
		
		<table align="center" width="600" border="0">
		<tr>
		<td width="281"><div align="right"><?php echo '<img src="staff/'.$photo.'"  style="width:128px;height:128px">'; ?>
		  </div></td></tr>
		  
		<tr><td><b>Teacher Id</b></td><td width="293"><?php echo $tid; ?></td>
		</tr>
		<tr><td><b>Name</b></td><td><?php echo $name; ?></td></tr>
		<tr><td><b>Housename</b></td><td><?php echo $hname; ?>></td></tr>
		<tr><td><b>Street</b></td><td><?php echo $street; ?></td></tr>
		<tr><td><b>City</b></td><td><?php echo $city; ?></td></tr>
		<tr><td><b>State</b></td><td><?php echo $state; ?></td></tr>
		<tr><td><b>Pin</b></td><td><?php echo $pin; ?></td></tr>
		<tr><td><b>Date of Birth</b></td><td><?php echo $dob; ?></td></tr>
		<tr><td><b>Date of Joining</b></td><td><?php echo $doj; ?></td></tr>
		<tr><td><b>Mobile</b></td><td><?php echo $mobile; ?></td></tr>
		<tr><td><b>Email</b></td><td><?php echo $email; ?></td></tr>
		<tr><td><b>Qualification</b></td><td><?php echo $qual; ?></td></tr>
		<tr><td><b>Designation</b></td><td><?php echo $desig; ?></td></tr>
		
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
