<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2>Register</h2>
 </div>

<form action="organizer_signup.php" method="post">
      <?php include('errors.php'); ?>
      <div class="input-group"> 
      <label for="Username" class="form-label">Username</label>
          	<input type="text" name="Organizer_Username">
      </div>
      <div class="input-group"> 
      <label for="Password" class="form-label">Password</label>
            <input type="password" name="Organizer_Password">  
      </div>
      <div class="input-group"> 
      <label for="Confirm Password" class="form-label">Confirm Password</label>
            <input type="password" name="Organizer_Password2">
      </div>
      <div class="input-group"> 
      <label for="Email address">Email address</label>
            <input type="email" name="Organizer_Email">
      </div>
	  <div class="input-group"> 
      <label for="Name" class="form-label">Company Name</label>
          	<input type="text" name="Organizer_Name">
      </div>
      <div class="input-group"> 
      <label for="Phone">Enter your phone number:</label>
            <input type="tel" class="form-control" id="phone" name="Organizer_Telephone">
      </div>
	  <div class="input-group"> 
      <label for="Bank">Enter your company bank account :</label>
            <input type="text" class="form-control" id="bank" name="Organizer_BankAccount">
      </div>
	  <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Agree to terms and conditions
            </label>
      </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_org">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>