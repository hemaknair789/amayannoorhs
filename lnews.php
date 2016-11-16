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
			<li><a href="managenews.php">BACK</a></li>

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
				<h1 align="center" class="title"><a href="#" class="style1">Post Latest News</a></h1>
				<p class="byline"></p>
				<div class="entry">
	
	<?php
session_start();
include("Connect.php");
$s= "select * from news";
$s1=mysql_query($s);
$i = 1;
while($row = mysql_fetch_array($s1))
  {
  $i++;
  }
$i=$i+0;
if(isset($_POST['submit']))		// code to post latest news 
{

$nid=$_POST["nid"];
$title=$_POST["title"];
$des=$_POST["des"];
$status=$_POST["status"];
$imgname =$_FILES['image']['name'];		//upload image for news
		   $imgtype =$_FILES['image']['type'];
		  $imgsize =$_FILES['image']['size'];
		    $imgtmp =$_FILES['image']['tmp_name'];
			$imgpath="gallery/";
			$imgpath=$imgpath.basename($_FILES['image']['name']);
        if( $imgname==''){
		echo "<script>alert('Please select an image)</script>";
		exit();
		}
		else{
		move_uploaded_file($imgtmp,$imgpath);
		}

$q="insert into news(NewsId,Title,Description,Status,Image)values('".$nid."','".$title."','".$des."','".$status."','".$imgname."')";
$q1=mysql_query($q);
if($q1)
	{
		echo "<script>alert('Sucessfully submitted');window.location.href='lnews.php'; </script>";
	}
	else
	{
		echo "<script>alert('Invalid') </script>";
	
}
}
?>


		<form name="lnews" method="post" action="" enctype="multipart/form-data">
		
		<table align="right" width="520" border="2">
		<tr><td width="121"><b>News Id</b></td>
		<td width="381"><input type="text" name="nid" readonly="readonly" value="<?php  echo "$i"; ?>" size="45" /></td></tr>
		<tr><td height="59"><b>Title</b></td>
		<td><input type="text" name="title" id="name" required onBlur="chk()" size="45" /></td></tr>
		<tr><td height="71"><b>Description</b></td>
		<td><textarea name="des" cols="45" id="name" onblur="chk()" required="required"></textarea></td></tr>
		<tr><td><b>Photo</b></td><td><input type="file" name="image" id="name" required onBlur="chk()"  /></td></tr>
		 <tr><td height="54"><b>Status</b></td>
		 <td>
                        <select name="status" >
                          <option value="Active" selected="selected">Active</option>
                          <option value="Hidden" >Hidden</option>
                  </select>
                </td></tr>
		<tr><td><input type="submit" value="Submit" name="submit" class="l"/></td>
		<td><a href="lnews.php"><font color="#0066FF"><b>Cancel</b></font></a></td></tr></tr>
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
