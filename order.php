<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="style.css">
	
	<title>ContactUs</title>
</head>

<body>
	
	<?php
	$dish=$_GET["dish"];
	
	?>
	<div id="ContactUs">
		<h1>Order <?php echo $dish; ?> Now</h1>
		<form action="order_ins.php" method="POST">
			
			<input type="hidden" value="<?php echo $dish; ?>" name="dish">
				<div class="form-shape">
				<label for="pho">Enter Quantity</label>
				<input type="phone" name="myQty"
					
					placeholder="Enter Quantity Of Item" required>
			</div>
			<div class="form-shape">
				<label for="name">Name</label>
				<input type="text" name="myName"
					
					placeholder="Enter your Name" required>
			</div>
			<div class="form-shape">
				<label for="name">Address</label>
				<input type="text" name="myAdd"
					
					placeholder="Enter your Address" required>
			</div>
			<div class="form-shape">
				<label for="pho">Phone Number</label>
				<input type="phone" name="myPhone"
					
					placeholder="Enter your Phone no" required>
			</div>
<!--
			<div id="radio">
			<br>
				Are you a member of OnlneFeast.com</br>
				Yes <input type="radio" name="eligible">
				No <input type="radio" name="eligible">
				
			</a></div>
-->
			<div class="form-shape">
				<label for="message">
				<br>
					-------------------Cash On Delivery----------------
				</br>
			</div>
			<br>
			<button type="submit" name="submit">Confirm</button>
 <a>
			
			
			<button><a href=index1.php onClick="alert('Order cancel go back home')">Cancel</button>
			</a></br>
		</form>
	</div>
</body>

</html>
