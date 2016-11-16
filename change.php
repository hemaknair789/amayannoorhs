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
			<li><a href="changepwd.php">BACK</a></li>

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
				<h1 align="center" class="title"><a href="#" class="style1">Change Password</a></h1>
				<p class="byline"></p>
				<div class="entry">
<?php

include("Connect.php");
$usr =$_GET["UName"];	//passes the selected username
?>
<form name="change" method="post" action="">
		
	<table width="600" height="225" border="0" align="center">
	<tr><td width="251"><b>Enter Current Password</b></td>
	<td width="339"><input type="password" name="curpwd" id="name" required onBlur="chk()" /></td></tr>
	<tr><td><b>Enter New Password</b></td><td><input type="password" name="newpwd" id="name" required onBlur="chk()"  /></td></tr>
	<tr><td><b>Confirm Password</b></td><td><input type="password" name="cnfpwd" id="name" required onBlur="chk()"  /></td></tr>
	<tr>
	  <td>
	    <div align="right">
	      <input type="submit" value="Change" name="change" class="l"/>
	      </div></td></table>
		</form>
<?php
	if(isset($_POST['change']))	//change password
		{
		
		$cu=$_POST["curpwd"];
		$np=$_POST["newpwd"];
		$cp=$_POST["cnfpwd"];
		$sq1="SELECT * FROM login where UType='$usr' ";
		$rc1=mysql_query($sq1);
		$m=mysql_fetch_assoc($rc1);
		$uname=$m['UName'];
		$pass=$m['Password'];
		
			if($cu==$pass and $np==$cp)		//confirming password
			{
				$s="update login set Password='$np' where UName='$uname'";
				$s1= mysql_query($s) or die($s."<br/><br/>".mysql_error());
		echo "<script>alert('Sucessfully Changed');window.location.href='adminhome.php'; </script>";
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
