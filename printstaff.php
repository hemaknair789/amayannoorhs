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
  
	$content   = "";
	$markT     = 0;
	$markOT    = 0;
	$content  .= "<h1 style='text-align:center;'>Staff List</h1>";
	$content  .= "<h3 style='text-align:center;'>Amayannoor High School</h3>";
	$content  .= "<h5 style='text-align:center;'>PH:0481-2541653, Email:amayannoorschool@gmail.com</h5>";
	$sqQuery1  = "select * from staff where status='Active'" ;
	$sqRes1    = mysql_query($sqQuery1);
	$content  .= "<br/>";
	$content  .= "<br/>";
	$content  .= "<table align='center' border='1' width='200' height='200'>";
	$content  .= "<tr><td>Sl No</td><td>Staff Id</td><td>Name</td><td>Designation</td><td>Qualification</td><td>Contact No</td><td>Date of Birth</td><td>Date of Joining</td></tr>";
	$i = 1;
	while($sqArr1 = mysql_fetch_array($sqRes1)) {
		$content  .= '<tr><td>'.$i.'</td><td>'.$sqArr1['Tid'].'</td><td>'.$sqArr1['Name'].'</td><td>'.$sqArr1['Designation'].'</td><td>'.$sqArr1['Qualification'].'</td><td>'.$sqArr1['Mobile'].'</td><td>'.$sqArr1['Dob'].'</td><td>'.$sqArr1['Doj'].'</td></tr>';
		$i++;
	}
	$content .="</table>";
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('printstudent.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
