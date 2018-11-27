<?php

   $reg = $_POST['reg'];
   $name = $_POST['name'];
   $book_id = $_POST['book_id'];
   $date_lend = $_POST['date_lend'];   


 $c = mysqli_connect("localhost","root","");
 
 if(mysqli_select_db($c,"library")){

   $check = mysqli_query($c,"insert into lending values('$reg','$name','$book_id','$date_lend')");
     

 }

?>

