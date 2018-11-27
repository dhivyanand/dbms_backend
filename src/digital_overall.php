<?php

if($c = mysqli_connect('localhost','root','')){ 
     if($a = mysqli_select_db($c,'library')){
     
     
       $result = mysqli_query($c,"select * from digitallibrary");
       
       echo "<table border='1'>
<tr>
<th>Registration</th>
<th>Name</th>
<th>Time In</th>
<th>Time Out</th>
<th>System</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['reg'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['timein'] . "</td>";
echo "<td>" . $row['timeout'] . "</td>";
echo "<td>" . $row['sys'] . "</td>";
echo "</tr>";
}
echo "</table>";
          echo "done";
     }
     
 }

?>