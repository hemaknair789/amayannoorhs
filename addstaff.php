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
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)  || (charCode ==32))
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
				<h1 align="center" class="title"><a href="#" class="style1">Add Staff</a></h1>
				<p class="byline"></p>
				<div class="entry">
	
	
						<?php			//code to insert staff details
session_start();
include("Connect.php");
$s= "select * from staff";
$s1=mysql_query($s);
$i = 1;
while($row = mysql_fetch_array($s1))
  {
  $i++;
  }
$i=$i+100;

if(isset($_POST['submit']))
{
$tid=$_POST["tid"];
$name=$_POST["name"];
$hname=$_POST["hname"];
$street=$_POST["street"];
$city=$_POST["city"];
$state=$_POST["state"];
$pin=$_POST["pin"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$doj=$_POST["doj"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$qual=$_POST["qual"];
$desig=$_POST["desig"];
$status=$_POST["status"];



 $imgname =$_FILES['image']['name'];				//code to upload staff photo
		   $imgtype =$_FILES['image']['type'];
		  $imgsize =$_FILES['image']['size'];
		    $imgtmp =$_FILES['image']['tmp_name'];
			$imgpath="staff/";
			$imgpath=$imgpath.basename($_FILES['image']['name']);
        if( $imgname==''){
		echo "<script>alert('Please select an image)</script>";
		exit();
		}
		else{
		move_uploaded_file($imgtmp,$imgpath);
		}



$q="insert into staff(Tid,Name,HouseName,Street,City,State,Pin,Dob,Gender,Doj,Mobile,Email,Qualification,Designation,Photo,Status)values('".$tid."','".$name."','".$hname."','".$street."','".$city."','".$state."','".$pin."','".$dob."','".$gender."','".$doj."','".$mobile."','".$email."','".$qual."','".$desig."','".$imgname."','".$status."')";
$q1=mysql_query($q);

if($q1)
	{
		echo "<script>alert('Sucessfully Registered');window.location.href='addstaff.php'; </script>";
	}
	else
	{
		echo "<script>alert('Invalid') </script>";
	
}
	
}

?>


		<form name="addstaff" method="post" action="" enctype="multipart/form-data">
		
		<table align="right" width="520" border="2">
		
		<tr><td><b>Teacher Id</b></td><td><input type="text" name="tid" readonly="readonly" value="<?php  echo "$i"; ?>" size="45" /></td></tr>
		<tr><td><b>Name</b></td><td><input type="text" name="name" id="name" required onKeyPress="return onlyAlphabets(event,this);" size="45" /></td></tr>
		<tr><td><b>Housename</b></td><td><input type="text" name="hname" id="name" required onBlur="chk()" size="45" /></td></tr>
		<tr><td><b>Street</b></td><td><input type="text" name="street" id="name" required onBlur="chk()" size="45" /></td></tr>
		<tr><td><b>City</b></td><td><input type="text" name="city" id="name" required onBlur="chk()" size="45" /></td></tr>
		<tr><td><b>State</b></td><td><input type="text" name="state" id="name" required onBlur="chk()" size="45" /></td></tr>
		<tr><td><b>Pin</b></td><td><input type="text" name="pin" required id="pin" onBlur="chk2()" onKeyPress="return chk2()" maxlength="10"></td></tr>
		<tr><td><b>Date of Birth</b></td><td><input type="date" name="dob" id="name" required onBlur="chk()" size="45" /></td></tr>
		<tr><td><b>Gender</b> <td><input type="radio" required name="gender" id="gender" value="male">
                <label for="gender">Male 
                  <input type="radio" name="gender" id="gender2" value="female">
              Female</label></td></tr>
		<tr><td><b>Date of Joining</b></td><td><input type="date" name="doj" id="name" required onBlur="chk()" size="45" /></td></tr>
		<tr><td><b>Mobile</b></td><td><input type="text" name="mobile" required id="contact" onBlur="chk2()" onKeyPress="return chk2()" maxlength="10"/></td></tr>
		<tr><td><b>Email</b></td><td><input type="text" name="email" id="email" required onBlur="chk1()" size="45" /></td><td><span id="eml"></span></td></tr>
		<tr><td><b>Qualification</b></td><td><input type="text" name="qual" id="name" required onBlur="chk()" size="45" /></td></tr>
		<tr><td><b>Designation</b></td><td><input type="text" name="desig" id="name" required onBlur="chk()" size="45" /></td></tr>
		<tr><td><b>Photo</b></td><td><input type="file" name="image" id="name" required onBlur="chk()" size="45" /></td></tr>
		
		 <tr><td><b>Status</b></td><td><label>
                        <select name="status" >
                          <option value="Active" selected="selected">Active</option>
                          <option value="Retired" >Retired</option>
                          <option value="Transfered">Transfered</option>
                          </select>
                      </label></td></tr>
		
		
		
		<tr><td><input type="submit" value="OK" name="submit" class="l"/></td>
		<td><a href="addstaff.php"><font color="#0066FF"><b>Cancel</b></font></a></td></tr>
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
