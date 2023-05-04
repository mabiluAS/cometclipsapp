<!DOCTYPE html>
<html>

<head>
	<title>ComitClips</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>	
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link " style="color: white; font-weight: bold;" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " style="color: white; font-weight: bold;" href="userlist.php">User List</a>
                    </li>        
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
		<?php

		$conn = mysqli_connect("localhost", "root", "", "cometclipsdb");
				
		if($conn === false){
			die("ERROR: Could not connect to the database with error: "
				. mysqli_connect_error());
		}
		
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$cellphone = $_REQUEST['cellphone'];
		$emailAddress = $_REQUEST['emailAddress'];
		$message = $_REQUEST['message'];
		
		if(strlen($cellphone) !== 10)
		{
			echo "<h4>The captured phone number does not meet standard South African phone number format, Please try again with a valid number.</h4>";

		} else {
			$sql = "INSERT INTO user (FirstName,LastName,Cellphone,Email,Message) VALUES ('$first_name',
			'$last_name','$cellphone','$emailAddress','$message')";
		
			if(mysqli_query($conn, $sql)){
			echo "<h4>User data was successfully stored in the database.</h4>
			<div class='card'>
			<ul class='list-group list-group-flush'>
			  <li class='list-group-item'>Name: $first_name</li>
			  <li class='list-group-item'>Surname: $last_name</li>
			  <li class='list-group-item'>Cellphone: $cellphone</li>
			  <li class='list-group-item'>Email: $emailAddress</li>
			  <li class='list-group-item'>Message: $message</li>
			</ul>
		  </div>";

			} else{
				echo "ERROR: $sql. "
					. mysqli_error($conn);
			}
		}		
		
		mysqli_close($conn);
		?>
	</div>
</body>

</html>
