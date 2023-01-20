<?php
if(isset($_POST['alter']))
{
	$name=$_POST['name'];
	$number=$_POST['number'];
	$mail=$_POST['mail'];
	$sqla=mysqli_query($conn,"alter table form1 add Salary integer");
	if($sqla==true)
	{
		echo "Alter!";
	}
	else
	{
	echo "failed";
    }
	
}
?>