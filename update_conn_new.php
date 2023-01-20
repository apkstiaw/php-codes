<?php
$link = mysqli_connect("localhost", "root", "", "last_data");
  
if($link === false){
    die("ERROR: Could not connect. "
                . mysqli_connect_error());
}

$sql = "UPDATE final_table SET username = dhanesh, mail = dhanesh@gmail.com, WHERE id='7';";
if($res = mysqli_query($link, $sql)){
    if(mysqli_num_rows($res) > 0){
        echo "<table>";
            echo "<tr>";
                
				echo "<th>username</th>";
                echo "<th>mail</th>";
				echo "<th>password</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($res)){
            echo "<tr>";
                
				echo "<td>" . $row['username'] . "</td>";
				echo "<td>" . $row['mail'] . "</td>";
				echo "<td>" . $row['password'] . "</td>";
                
                
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($res);
    } else{
        echo "No Matching records are found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " 
                                . mysqli_error($link);
}
  
mysqli_close($link);
?>