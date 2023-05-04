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
		
        echo "<h4>CometClips Users</h4>";

        echo "<table class='table table-striped'>
            <thead>
                <tr>
                <th scope='col'>#</th>
                <th scope='col'>First Name</th>
                <th scope='col'>Last Name</th>
                <th scope='col'>Cellphone</th>
                <th scope='col'>Email</th>
                <th scope='col'>Message</th>
                </tr>
            </thead>
            <tbody>";
                $result = $conn->query("SELECT * FROM user");
                if ($result->num_rows > 0) {            
                    while($row = $result->fetch_assoc()) {
                      echo "  <tr>
                        <th scope='row'>".$row["Id"]."</th>".
                         "<td>". $row["FirstName"]. "</td>".
                         "<td>". $row["LastName"]. "</td>".
                         "<td>". $row["Cellphone"]. "</td>".
                         "<td>". $row["Email"]. "</td>".
                         "<td>". $row["Message"]. "</td>".
                        "</tr>";
                    }
                } else{
                    echo "<tr>
                         <td colspan='6'> There are no users saved yet.</td>
                    </tr>";
                }
          echo  "</tbody>
        </table>";

		mysqli_close($conn);
		?>
	</div>
</body>

</html>
