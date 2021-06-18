<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login and Registration form example</title>
<link rel="stylesheet" type="text/css" href="reg.css">
</head>
 
<body bgcolor="#E6E6FA">
 
<form name="regi" action="user_ins.php" method="post">
<h2>Registration Form</h2>
 
<label for="r1" id="fn">First Name :</label>
<input type="text" name="fname" id="r1" required><br/>
 
<label  for="r2" id="ln">Last Name :</label>
<input type="text" name="lname" id="r2" required><br/>
 
<label  for="r3" id="un">Username :</label>
<input type="text" name="uname" id="r3" required><br/>
 
<label  for="r4" id="pwd">Password :</label>
<input type="password" name="pass" id="r4" required><br/>
 
<label  for="r5" id="em">Email :</label>
<input type="email" name="email" id="r5" required><br/>
 
<label  for="r6" id="mn">Mobile No :</label>
<input type="tel" name="mno" id="r6" required><br/>
 
<label for="r8" id="cy">City:</label>
 
<select name="ct" id="r8" required>
<option>Select</option>
<option>Pune</option>
<option>Mumbai</option>
<option>Raigad</option>
<option>Nagpur</option>
<option>Nasik</option>
<option>Raigad</option>
<option>Nagar</option>
<option>Kolhapur</option>
<option>Solapur</option>
</select><br/><br/>
 
<button><a type="submit" name="submit" id="button">Register</button>
<a href="login.php">Back to Home</a>
 
</form>
 
<script type="text/javascript">
function save(){
var user = document.getElementById("user").value;
var pwd = document.getElementById("pwd").value;
alert("username"+user+"password"+pwd);
}
</script>
 
</body>
</html>
