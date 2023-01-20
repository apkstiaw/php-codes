<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="new_1.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
	<?php include 'connect01.php';?>
	
	<?php
		 if(isset($_POST['insert']))
{
	$firstname 			  =$_POST['firstname'];
	$username  			  =$_POST['username'];
	$email	   			  =$_POST['email'];
	$number    			  =$_POST['number'];
	$password  			  =$_POST['password'];
	$Confirm_password     =$_POST['Confirm_password'];
	$Gender     		  =$_POST['Gender'];
	$sql=mysqli_query($conn,"insert into table01(firstname,username,email,number,password,Confirm_password,Gender)
	values('$firstname','$username','$email','$number','$password','$Confirm_password','$Gender')");
	if($sql==true)
	{
		echo "Data submitted!";
	}
	else
	{
	echo "submitted failed";
    }
}
?>
		
	
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required name="firstname">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required name="username">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required name="email">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required name="number">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required name="password">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required name="Confirm_password">
          </div>
		  <div class="input-box">
            <span class="details">Gender</span>
            <input type="text" placeholder="Gender" required  name="Gender">
          </div>
        </div>
    
		<div class="button">
    <button type="submit" name="insert" >submit</button>
       </div>
 
      </form>
    </div>
  </div>

</body>
</html>
