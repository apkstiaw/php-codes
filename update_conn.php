<?php
if(isset($_POST['update']))
{
	$username=$_POST['username'];
	$mail=$_POST['mail'];
	$password=$_POST['password'];
	
	$sql1=mysqli_query($conn,"update last_data set  username='pavi' where id='5'");
	if($sql1==true)
	{
		echo "Data update!";
	}
	else
	{
	echo "update failed";
    }
}
?>