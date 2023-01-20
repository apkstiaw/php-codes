<?php 
$a=$_POST['username'];
$b=$_POST['mail'];
$c=$_POST['password'];
 
$con=mysqli_connect ("localhost","root","","last_data");
$sql="INSERT INTO final_table( username, mail, password) values ('$a', '$b', '$c' )";
$common=mysqli_query ($con,$sql);
if($common)
 {
   echo "inserted succesfully";
 }
  else 
 {
    echo "insertion failed"; 
}	
?>


