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
			<li><a href="updatehm.php">BACK</a></li>

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
				<h1 align="center" class="title"><a href="#" class="style1">Add HM</a></h1>
				<p class="byline"></p>
				<div class="entry">
	<?php
include("Connect.php");
$tid=$_GET["Tid"];			//passes selected teacher id


$query = "select * from staff where Tid='$tid' ";		//select the passed tid details
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {

$name=$row["Name"];
$mobile=$row["Mobile"];
$email=$row["Email"];
$qual=$row["Qualification"];
$photo=$row["Photo"];

}

?>
	


		
		<form name="addhm" method="post" action="" enctype="multipart/form-data">
		
		<table width="800" height="402" border="0" align="center">
		<tr><td width="162"><b></b></td>
		<td width="628"><?php echo '<img src="staff/'.$photo.'"  style="width:128px;height:128px">'; ?>
		<tr><td><b>Teacher Id</b></td><td><input type="text" name="tid" size="45" readonly="readonly"  value="<?php echo $tid; ?>"/></td></tr>
		<tr><td><b>Name</b></td><td><input type="text" name="name" size="45" readonly="readonly" value="<?php echo $name; ?>" /></td></tr>
		<tr><td><b>Mobile</b></td><td><input type="text" name="mobile" size="45"  readonly="readonly" value="<?php echo $mobile; ?>"/></td></tr>
		<tr><td><b>Email</b></td><td><input type="text" name="email" size="45" readonly="readonly" value="<?php echo $email; ?>" /></td></tr>
		<tr><td><b>Qualification</b></td><td><input type="text" name="qual" size="45" readonly="readonly" value="<?php echo $qual; ?>"/></td></tr>
		<tr><td><b>From</b></td>
		<td>Month
						<?php $months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');?>		
                        <select name="fm" >
						<?php foreach ($months as $key => $value) 
						{
						
						  echo "<option value=\"$value\"> $value</option>\n";
						}
						?>
				  </select>	
				  	  
               Year
                        <select name="fy" >
						<?php
						  for ($year = 2005; $year <= 2035; $year++)
						   {
  							echo "<option value=\"$year\"> $year</option>\n";
							}
							?>
				  </select>
						  
                </td></tr>
		
		
		<tr><td><b>To</b></td>
		<td>Month
						<?php $months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');?>
                        <select name="tm" >
						<?php foreach ($months as $key => $value) 
						{
						
						  echo "<option value=\"$value\"> $value</option>\n";
						}
						?>
				  </select>	
				  	  
               Year
                        <select name="ty" >
						<?php
						  for ($year = 2005; $year <= 2035; $year++)
						   {
  							echo "<option value=\"$year\"> $year</option>\n";
							}
							?>
				  </select>
                </td></tr>
		
		
		
		
		<tr><td height="52"><div align="right">
		  <input type="submit" value="Add" name="add" class="l"/>
		  </div></td></tr>
		  <?php
if(isset($_POST['add']))
{
$s= "update hm set State='Old' ";			//add new hm
$r = mysql_query($s) or die($s."<br/><br/>".mysql_error());
$tid=$_POST["tid"];
$fm=$_POST["fm"];
$fy=$_POST["fy"];
$tm=$_POST["tm"];
$ty=$_POST["ty"];
$f=$fm.' '.$fy;
$t=$tm.' '.$ty;
$sql="insert into hm(Tid,Start,End,State)values('".$tid."','".$f."','".$t."','Current')";
$q1=mysql_query($sql);
if($q1)
	{
		echo "<script>alert('Sucessfully Added');window.location.href='addhm.php?Tid=$tid'; </script>";
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
