<!DOCTYPE html>
 
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login and Registration form example</title>
 
<link rel="stylesheet" type="text/css" href="reg.css">
 
</head>
 
<body>
 
<div id="container">
<form action="logincheck.php" method="post" >
 
<div class="border-box">
<h2>Login Form</h2>

 
<label for="uname">Username:</label>
<input type="text" name="uname" placeholder="Enter Username" id="uname"><br/>
 
 <label for="upass" id="ps">Password:</label>
<input type="password" name="upass" placeholder="Enter Password" id="upass"><br/>
<button>Login</button>
 <a>
 <br><a href="register1.php">Create New Account</a>
</br>
<a href="index1.php">Back to home</a>
</div> 
</form>
</div>
</body>
</html>