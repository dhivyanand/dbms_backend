<?php

$reg = $_POST['reg'];

 if($c = mysqli_connect('localhost','root','')){
     
     if($a = mysqli_select_db($c,'library')){
     
       $result = mysqli_query($c,"select timein,timeout,sys,date from digitallibrary where reg = '$reg'");
     
     echo "<table border='1'>
<tr>
<th>Time In</th>
<th>Time Out</th>
<th>System Used</th>
<th>Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['timein'] . "</td>";
echo "<td>" . $row['timeout'] . "</td>";
echo "<td>" . $row['sys'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
}
echo "</table>";
     
     
     }

 }

?>