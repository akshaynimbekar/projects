<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/signup.css">
    <title>campus drive</title>
</head>
<body>
<div class="signup-form">
	<h1 class="heading">WELCOME</h1>
    <p class="heading">Enter your details and submit this form to confirm your participation in campus drive</p>
    <form action="signuphelp.php" method="POST">
		<hr>
        <div class="form-group">
			<input type="text" name="name" class="input" id="name" placeholder="First_Name Middle_Name Last_Name" required>       	
        </div>
		<div class="form-group">
			<input type="number" name="age" class="input" id="age" placeholder="Enter your Age" required>       	
        </div>
		<div class="form-group">
			<input type="text" name="gender" class="input" id="gender" placeholder="Enter your Gender" required>       	
        </div>
        <div class="form-group">
        	<input type="email" class="input" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
			<input type="number" name="phone" class="input" id="phone" placeholder="Enter your Phone" required>
        </div>
		<div class="form-group">
			<input type="text" name="birth_date" class="input" id="birth_date" placeholder="Enter your Birth Date" required>
        </div>        
        <div class="form-group">
			<input type="number" name="semister" class="input" id="semister" placeholder="Enter your current Semister" required>
		</div>
		<div class="form-group">
			<input type="number" name="cgpa" class="input" id="cgpa" placeholder="Enter your cgpa" required>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>

</div>
</body>
</html>
