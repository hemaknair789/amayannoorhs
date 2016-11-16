<?php
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */

    // get the HTML
	//$admno=$_GET["Admno"];
    ob_start();
    include(dirname(__FILE__)."/print1.php");
    $content = ob_get_clean();

    // convert to PDF
//    require_once(dirname(__FILE__).'/../html2pdf.class.php');

  require_once('html2pdf.php');
  
    $admno     = $_GET['Admno'];
	 $t     = $_GET['TermId'];
	$content   = "";
	$markT     = 0;
	$markOT    = 0;
	$content  .= "<h1 style='text-align:center;'>Progress Report</h1>";
	$s   = "select * from term where TermId = '$t'";
	$sq     = mysql_query($s);
	$sqa     = mysql_fetch_array($sq);
	$content  .= "<h2 style='text-align:center;'>".$sqa['TermDis']." ".$sqa['Year']."</h2>";
	$content  .= "<h3 style='text-align:center;'>Amayannoor High School</h3>";
	$content  .= "<h5 style='text-align:center;'>PH:0481-2542276, Email:amayannoorschool@gmail.com</h5>";
	$sqQuery   = "select * from student where Admno = '$admno'";
	$sqRes     = mysql_query($sqQuery);
	$sqArr     = mysql_fetch_array($sqRes);
	$content  .= "<br/>";
	$content  .= "<br/>";
	$content  .= "<br/>";
	$content  .= "<table align='center' border='0' >";
	$content  .= "<tr><th>Admission No</th><td>:  ".$admno."</td></tr>";
	$content  .= "<tr><th>Name</th><td>:  " .$sqArr['Name']."</td></tr>";
	$content  .= "<tr><th>Class</th><td>:  " .$sqArr['Class']." ".$sqArr['Division']."</td></tr>";
	$content  .= "<tr><th>Date of Birth</th><td>:  ".$sqArr['Dob']."</td></tr>";
	$content .="</table>";
	$sqQuery1  = "select m.Admno,m.TermId,m.SubId,m.OMark,m.TMark,s.SubId,s.SubName from mark m,subject s where m.Admno = '$admno' and m.TermId='$t' and m.SubId=s.SubId order by s.SubId";
	$sqRes1    = mysql_query($sqQuery1);
	$content  .= "<br/>";
	$content  .= "<br/>";
	$content  .= "<table align='center' border='6' width='200' height='200'>";
	$content  .= "<tr><td>Sl No</td><td>Subject</td><td>Mark Scored</td><td>Total</td></tr>";
	$i = 1;
	while($sqArr1 = mysql_fetch_array($sqRes1)) {
		$content  .= '<tr><td>'.$i.'</td><td>'.$sqArr1['SubName'].'</td><td>'.$sqArr1['OMark'].'</td><td>'.$sqArr1['TMark'].'</td></tr>';
		$markT     = $markT + $sqArr1['TMark'];
	    $markOT    = $markOT + $sqArr1['OMark'];
		$i = $i + 1;
	}
	$content .= "<tr><td colspan='2'>Total</td><td>".$markOT."</td><td>".$markT."</td></tr>";
	$content .="</table>";
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('report.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
