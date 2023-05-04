<!DOCTYPE html>
<html lang="en">
<head>
	<title>CometClips Form</title>
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
		<h3>Capture User Data</h3>
		<form action="submit.php" method="post">			
            <div class="mb-3">
                <label class="form-label" for="firstName">First Name:</label>
                <input class="form-control" type="text" name="first_name" required id="firstName">
			</div>

            <div class="mb-3">
                <label class="form-label" for="lastName">Last Name:</label>
                <input class="form-control" type="text" name="last_name" required id="lastName">
			</div>
			
            <div class="mb-3">
                <label class="form-label" for="cellphone">Cellphone:</label>
                <input class="form-control" type="tel" max="10" required name="cellphone" id="cellphone">
			</div>
			
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Email Address:</label>
                <input class="form-control" type="email" name="emailAddress" required id="emailAddress">
			</div>
			
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea class="form-control" id="message" name="message" required rows="3"></textarea>
            </div>

            <div class="col-auto">
			    <input type="submit" class="btn btn-primary mb-3" value="Submit">
            </div>
		</form>
    </div>
</body>
</html>
