<?php
require_once("dbconnect.php");

$strSQL = "SELECT * FROM playerinfo" ;

$rs = mysqli_query($conn,$strSQL);


  print "<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#ffffff\">
   <tr>
   <th width=100>Name</th> 
  <th width=100>Branch</th> 
  <th width=100>Semester</th> 
  <th width=100>Hand</th> 
  <th width=100>Role</th>
  <th width=100>Bat-type</th> 
  <th width=100>Bowl-type</th> 
  </tr>"; 
 while($row = mysqli_fetch_array($rs))
 { 
print "<tr>"; 
print "<td>" . $row['name'] . "</td>"; 
print "<td>" . $row['branch'] . "</td>"; 
print "<td>" . $row['sem'] . "</td>"; 
print "<td>" . $row['hander'] . "</td>";
print "<td>" . $row['specialisation'] . "</td>";
print "<td>" . $row['battype'] . "</td>";
print "<td>" . $row['bowltype'] . "</td>";
print "</tr>"; 
} 
print "</table>";
?>