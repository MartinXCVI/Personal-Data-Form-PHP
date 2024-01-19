<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!------ Google font 'Poppins' {font-family: 'Poppins', sans-serif;} ------->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!----- CSS Stylesheet ----->
	<link rel="stylesheet" href="styles.css">
	<title>Forms</title>
</head>
<body>

	<h1 class="title">Personal Data Form</h1>
	<section class="container">
		<form action="connect.php" method="post" id="data-form">
			<div class="form-div">
				<label for="">First Name:</label>
				<input type="text" name="firstname" placeholder="Enter your first name" maxlength="35" required autocomplete="off">
			</div>
			<div class="form-div">
				<label for="">Last Name:</label>
				<input type="text" name="lastname" placeholder="Enter your last name" maxlength="35" required autocomplete="off">
			</div>
			<div class="form-div">
				<label for="">Email:</label>
				<input type="email" name="email" placeholder="Enter your email" maxlength="50" required autocomplete="off">
			</div>

			<fieldset class="genderContainer">
				<legend>Choose your gender:</legend>
				<div class="gender-div">
					<input class="gender" type="radio" name="gender" value="Male" required><label for="">Male</label>
				</div>
				<div class="gender-div">
					<input class="gender" type="radio" name="gender" value="Female" required><label for="">Female</label>
				</div>
				<div class="gender-div">
					<input class="gender" type="radio" name="gender" value="Other" required><label for="">Other</label>
				</div>
			</fieldset>

			<div class="form-div">
				<label for="">Telephone:</label>
				<input type="tel" name="telephone" placeholder="Enter your telephone number" max="15" required autocomplete="off">
			</div>
			<div class="form-div">
				<label for="">Address:</label>
				<input type="text" name="address" placeholder="Enter your address" maxlength="75" required autocomplete="off">
			</div>
			<div class="btn-div">
				<button type="submit" class="submit-btn">Submit My Data</button>
			</div>
		</form>
	</section>

</body>
</html>