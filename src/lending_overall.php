<?php

if($c = mysqli_connect('localhost','root','')){ 
     if($a = mysqli_select_db($c,'library')){
     
     
       $result = mysqli_query($c,"select * from lending");
       
       echo "<table border='1'>
<tr>
<th>Registration</th>
<th>Name</th>
<th>Book ID</th>
<th>Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['reg'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['book_id'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
}
echo "</table>";
        
     }
     
 }

?>

