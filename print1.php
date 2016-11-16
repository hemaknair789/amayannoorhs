
<?php
session_start();
include("Connect.php");
//$id = $_SESSION['din'];

$q = mysql_query("select Admno,SubId from mark");
echo "<form action='print1.php' method='post'>"; 
//echo"<center>";//form started here
echo "<table width='1000'>
<tr>
<td><b>Roll no</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><b>Admission no</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>";

if($q)
{
while($row = mysql_fetch_array($q))
{
 echo "<tr>";
  echo "<td>" . $row['Admno'] . "</td>";
  echo "<td>" . $row['SubId'] . "</td>";
  echo "</tr>";
}
}

echo "</table>";
//echo "</center>";
echo "</form>";

?>

