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
						<li><a href="login.php">LOGIN</a></li>

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
<?php
  include("Connect.php");
  $nid=$_GET['NewsId'];
  $des=$_GET['Description'];
  $tit=$_GET['Title'];
  ?>
 
<!-- end header -->
       
                <?php
  $s= "select * from news where NewsId='$nid' ";		//select news details and display
$s1=mysql_query($s);
if($row = mysql_fetch_array($s1))
  {
 $img=$row["Image"];
  }
?>
	<!-- start page -->
	<div id="page1">
	
	<?php echo $tit; ?>
	
	
	<form action="viewnews.php" method="" enctype="multipart/form-data">
	 
	  
	    <div class="lg-container">
	  <?php echo '<img src="gallery/'.$img.'"  style="width:500px;height:300px">'; ?>
	      <?php echo $des; ?>
        
	
					</form>

</div>
		  
		<!-- end content -->
		
		<div style="clear: both;">&nbsp;</div>
	
	<!-- end page -->
</div>

<div id="footer">
	<p class="copyright">&copy;&nbsp;&nbsp;2016 All Rights Reserved &nbsp;</p>
	<p class="link"><a href="#">Privacy Policy</a>&nbsp;&#8226;&nbsp;<a href="#">Terms of Use</a></p>
</div>
</body>
</html>
