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
.style9 {
	font-size: 16px;
	font-weight: bold;
}
.style10 {font-size: 16px}
.style11 {font-size: 14px}
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
<!-- end header -->
<div id="wrapper">
	<!-- start page -->
	<div id="page">
<div id="sidebar1" class="sidebar">
	  <ul>
			  <li></li>
		    
            <li></li>
            <li></li>
            <li></li>
            <li>
              <h2>Important Links </h2>
              <ul>
                <li><a href="hm.php">HMs DESK</a></li>
                <li><a href="viewgallery.php">GALLERY</a></li>
                <li><a href="activities.php">ACTIVITIES</a></li>
                <li><a href="clubs.php">SCHOOL CLUBS</a></li>
                <li><a href="pta.php">PTA</a></li>
              </ul>
            </li>
  </ul>
		  
 
 <ul>
			  <li></li>
		    
            <li></li>
            <li></li>
            <li></li>
  <li>
              <h2>Others </h2>
              <ul>
                <li><a href="http://sampoorna.itschool.gov.in/" target="_blank">SAMPOORNA</a></li>
                  <li><a href="https://www.itschool.gov.in/" target="_blank">IT@SCHOOL</a></li>
                  <li><a href="http://www.education.kerala.gov.in/" target="_blank">GENERAL EDUCATION</a></li>
                  <li><a href="http://www.keralapareekshabhavan.in/" target="_blank">PAREEKSHABHAVAN</a></li>
				  <li><a href="http://www.sslcexamkerala.gov.in/" target="_blank">IExaMS</a></li>
      </ul>
    </li>
			 <li>
            
              <ul>
                
               </ul>
            </li>
  </ul>
		
		
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
  <p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
</div>
		<!-- start content -->
		<div id="wrapper">
	
		<div id="content">
			<div class="flower"></div>
		  <div class="post">
				<h1 class="title" align="center"><a href="#">HMs Desk</a></h1>
				
				<p class="byline"></p>
			<div class="entry">
			<div id="new1">
					
					<?php		//to view hm details
include("Connect.php");

$query = "select h.Tid,h.State,s.Tid,s.Name,s.HouseName,s.Street,s.City,s.State,s.Pin,s.Mobile,s.Email,s.Qualification,s.Photo from hm h,staff s where h.State='Current' and h.Tid=s.Tid  ";
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {

  $name=$row["Name"];
  $hname=$row["HouseName"];
$street=$row["Street"];
$city=$row["City"];
$state=$row["State"];
$pin=$row["Pin"];
$mobile=$row["Mobile"];
$email=$row["Email"];
$qual=$row["Qualification"];
$photo=$row["Photo"];

}

?>


		
		<form name="staffedit" method="post" action="" enctype="multipart/form-data">
		
		<table width="335" height="200" border="0" align="left">
		<tr><td width="219"><b></b></td>
		<td width="15"><?php echo '<img src="staff/'.$photo.'"  style="width:128px;height:128px">'; ?>
		<tr><td align="left"><b></b></td>
		<td align="left"><?php echo $name; ?></td></tr>
		<tr><td align="left"><b></b></td>
		<td align="left"><?php echo $qual; ?></td></tr>
		<tr><td  align="left"><b></b></td>
		<td align="left"><?php echo $email; ?></td></tr>
		<tr><td align="left"><b></b></td><td align="left"><?php echo $mobile; ?></td></tr>
	
		</table>
		</form>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
			</div>
		  </div>
		 
		  </div>
		  <div class="post">
				<h1 class="title"><a href="#"></a></h1>
				<p class="byline"></p>
				<div class="entry">
					<p><strong>It gives me immense pleasure to pen a few words about our school.I am very happy with the progress that the school has made in the past years.Here we help the students to explore their potential and achieve their personal best in all aspects of school life. </strong></p>

<p><strong>Empowerment of students for their all round development through education is our cherished motto. Today education means much more than merely acquiring knowledge. It is acquisition of knowledge and skills, building character and improving employability of our young talent, the future leadership.With the willing contribution of the teaching and non-teaching staff, over whelming response and enthusiastic participation of my dear students and supporting parents we have achieved the above mentioned goals and objectives. </strong></p>

<p><strong>I am proud of being the Principal of such a wonderful institution. Come on let’s give our best and make this institution a modern temple of learning through our hardwork, devotion and dedication. Wishing you all the best…!</strong></p>
&nbsp;
<p><strong>Principal</strong></br>
<strong><?php echo $name;?></strong></p>
					
				</div>
			   
		  </div>
		  
		  
		  
		  
		  
		</div>
		
		</div>	
				
	

		<!-- end content -->
		<!-- start sidebars -->
		<div id="sidebar2" class="sidebar">
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<ul>
			  <p>&nbsp;</p>
			  <li>
			    <h2>Calender</h2>
				  <div id="calendar_wrap">
				     <p>
					      <script type="text/javascript">
            calendar();
        </script></p>
		
				  </div>
				   <p>&nbsp;</p>
				    
					 
<li>
			    <h2>Latest News</h2>
				  <ul>
				      <p><marquee behavior="scroll" direction="up" height="150" scrollamount="2" scrolldelay="10" onMouseOver="this.stop()" onMouseOut="this.start()">
					      
				      <?php
  include("Connect.php");
//$id = $_SESSION['din'];
$query = "select * from news where Status='Active'";

$result=mysql_query($query);


while($row = mysql_fetch_array($result))
  {
 	$nid=$row["NewsId"];
	$des=$row["Description"];
	$tit=$row["Title"];

  echo "<a href='viewnews.php?NewsId=$nid&Description=$des&Title=$tit'>".$row['Title']. " </a><br><br><br>";
  
  }
?>
  </marquee>
  </p>
				  </ul>
</li>
		   <li>
              
              <ul>
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>
				 <p>&nbsp;</p>
                <p>&nbsp;</p> <p>&nbsp;</p>
                <p>&nbsp;</p> <p>&nbsp;</p>
                <p>&nbsp;</p> <p>&nbsp;</p>
                <p>&nbsp;</p> <p>&nbsp;</p>
                <p>&nbsp;</p>
              </ul>
</li>
			
	  </div>
		<p>
		  <!-- end sidebars -->
</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end page -->
</div>

<div id="footer">
	<p class="copyright">&copy;&nbsp;&nbsp;2016 All Rights Reserved &nbsp;</p>
	<p class="link"><a href="#">Privacy Policy</a>&nbsp;&#8226;&nbsp;<a href="#">Terms of Use</a></p>
</div>
</body>
</html>
