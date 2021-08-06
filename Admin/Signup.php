<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="Signup.css" rel="stylesheet"/>
        <title>Sign In</title>
    </head>
    <body>
    <?php
include '../StructureSite/NavBar.php'
?>
    <h1>Sign Up</h1>
        <form action="Database.php" method="post">
            <p>
            <input type="text" name="last_name" placeholder="LAST NAME" required="required"/>
            <input type="text" name="first_name" placeholder="FIRST NAME" required="required"/>
            <input type="email" name="email" placeholder="EMAIL" required="required"/>
            <input type="password" name="password" placeholder="PASSWORD" required="required"/>
            <input type="password" name="password" placeholder="PASSWORD" required="required"/>
            <input type="submit" value="CRÉER UN COMPTE" />
            </p>
        </form>
        <div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post" data-bitwarden-watching="1">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<div class="hint-text">Already have an account? <a href="#">Login here</a></div>
</div>
    </body>
</html>