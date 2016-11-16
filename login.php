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
<script src="js/animation.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:12,
		animSpeed:500,
		pauseTime:2000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.7, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>





<style type="text/css">
<!--
.style7 {font-size: 18px; font-weight: bold; }
.style8 {font-size: 14px}
-->
</style>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul id="main">
			<li><a href="index.php">HOMEPAGE</a></li>
			<li><a href="about.php">ABOUT US</a></li>
			<li><a href="faculty.php">FACULTY</a></li>
			 <li>
			   <div id="horizontalmenu">
                               <ul><li><a href="#">FACILITIES</a>
							   <ul><li><a href="lab.php">LAB</a></li> 
							   <li><a href="library.php">LIBRARY</a></li> 
							   <li><a href="bus.php">SCHOOL BUS</a></li> 
							    </ul> </li>
                               </ul></div>
                                
          </li>
			<li><a href="contact.php">CONTACT US</a></li>
						<li class="current_page_item"><a href="login.php">LOGIN</a></li>

		</ul>
	</div>
	
	
	<div id="logo1">
	
		

		<h1><a href="#"><span> AMAYANNOOR HIGH SCHOOL </span></a></h1>
		<p></p>
	</div>

	
<div id="logo">
   <div id="slider">
        <a href="#"><img src="images/trial.jpg" alt="slideshow 01"/></a>
        <a href="#"><img src="images/02.jpg" alt="slideshow 02"/></a>
        <a href="#"><img src="images/03.jpg" alt="slideshow 03"/></a>
        <a href="#"><img src="images/04.jpg" alt="slideshow 04"/></a>
        <a href="#"><img src="images/05.jpg" alt="slideshow 05"/></a>
    </div>

	</div>
</div>
<!-- end header -->

	

		<!-- start content -->
		<div id="page1">
		<div class="lg-container">
		
		<h1>Login....</h1>
			
  
				<form action="" method="post">
  <table width="388" height="176" border="1" align="center">
  <tr>
    <td width="110"><label>Username</label></td>
    <td width="262"><input name="uname" type="text" id="name" required onBlur="chk()" /></td>
  </tr>
  <tr>
    <td><label>Password</label></td>
    <td><input name="password" type="password" id="name" required onBlur="chk()" /></td>
  </tr>
   <tr>
     <td><input name="btsubmit" type="submit" value="Login" class="l"/></td>
     <td><a href="login.php"><font color="#0066FF"><b>Cancel</b></font></a></td>
   </tr>
</table>
</form></div>
 </div>
</div>

<div style="clear: both;">&nbsp;</div>
</div>
</div>
</div>
<?php
session_start();
include("Connect.php");
if(isset($_POST['btsubmit']))		//code to check whether username and password is valid
{
	
	$uname= mysql_real_escape_string($_POST['uname']);
	$password= mysql_real_escape_string($_POST['password']);
	

$uid=mysql_query("select * from login where UName='".$uname."' and Password='".$password."'");
if($res=mysql_fetch_array($uid))
{ 
	      if($res[2]=="admin")		//if admin redirects to admin home
			 {
				   $_SESSION['hxt']=$uname;
 				   header('Location:adminhome.php');
			 }
			else if($res[2]=="officestaff")		//if office staff redirects to office staff home
					{
			
						$_SESSION['din']=$username;
 						header('Location:officehome.php');
					}
					
			else if($res[2]=="teacher")			//if teacher redirects to teacher home
					{
			
						$_SESSION['abc']=$username;
 						header('Location:teacherhome.php');
					}	
			
			
			
}
else
{
$val=1;
echo "<script>alert('Invalid Login') </script>";

}
}
?>
		<!-- end content -->
		
	<!-- end page -->



<div id="footer">
	<p class="copyright">&copy;&nbsp;&nbsp;2016 All Rights Reserved &nbsp;</p>
	<p class="link"><a href="#">Privacy Policy</a>&nbsp;&#8226;&nbsp;<a href="#">Terms of Use</a></p>
</div>
</body>
</html>
