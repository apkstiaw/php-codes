<?php

	$link = mysqli_connect('localhost', 'root' , '','last_data');
	if (!$link) {
		die('connection error' .mysqli_connect_error());
	}
	
	$query = "DELETE FROM final_table WHERE id= 5";
	$result = mysqli_query($link, $query);
	
	if ($result)  {
		echo 'successfully deleted';
		}
		else
		{
		echo 'Error while deleting record';
		}
?>