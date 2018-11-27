<?php

$reg = $_POST['reg'];
$name = $_POST['name'];
$in = $_POST['in'];
$out = $_POST['out'];
$sys = $_POST['sys'];

$date = getdate();
 if($c = mysqli_connect('localhost','root','')){
          //echo "done";
     if($a = mysqli_select_db($c,'library')){
     
      //echo "done";
       if(mysqli_query($c,"insert into digitallibrary values('$reg','$name','$in','$out','$sys','$date')"))
        echo "done";
     }
     
 }

?>
