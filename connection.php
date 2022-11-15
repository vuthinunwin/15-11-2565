<?php
session_start();
$username = "";
$email    = "";
$errors = array();
// connect to the database
$db = mysqli_connect('127.0.0.1', 't65g5', 't65g5', 't65g5');

if (isset($_POST['reg_user'])) {
    $firstname = $_POST['Customer_Name'];
    $lastname = $_POST['Customer_Lastname'];
    $username = $_POST['Customer_Username'];
    $email = $_POST['Customer_Email'];
    $password_1= $_POST['Customer_Password'];
    $password_2 = $_POST['Customer_Password2'];
    $telephone = $_POST['Customer_Telephone'];
    $birthday = $_POST['Customer_Birthday'];
    $gerne = $_POST['Favorite_Gerne'];
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($firstname)) { array_push($errors, "Firstname is required"); }
    if (empty($lastname)) { array_push($errors, "Lastname is required"); }
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match");}
    if (empty($telephone)) { array_push($errors, "Telephone Number is required"); }
    if (empty($birthday)) { array_push($errors, "Birthday is required"); } 

  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM roles WHERE Customer_Username='$username' OR Customer_Email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $sql1 = "INSERT INTO roles SET Username='$username' ,Email='$email' ,Roles='customer'";
        $sql2 = "INSERT INTO customer_signup SET Customer_Username='$username' ,Customer_Password='$password_1',Customer_Email='$email', Customer_Name='$firstname'
        , Customer_Lastname='$lastname', Customer_Telephone='$telephone', Customer_Birthday='$birthday', Favorite_gerne='$gerne'";
        mysqli_query($db, $sql1);
        mysqli_query($db, $sql2);
        $_SESSION['Customer_Username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}

if (isset($_POST['reg_org'])) {
  $name = $_POST['Organizer_Name'];
  $bank = $_POST['Organizer_BankAccount'];
  $username = $_POST['Organizer_Username'];
  $email = $_POST['Organizer_Email'];
  $password_1= $_POST['Organizer_Password'];
  $password_2 = $_POST['Organizer_Password2'];
  $telephone = $_POST['Organizer_Telephone'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match");}
  if (empty($telephone)) { array_push($errors, "Telephone Number is required"); }
  if (empty($bank)) { array_push($errors, "Bank Account is required"); } 


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM roles WHERE Organizer_Username='$username' OR Organizer_Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
      $sql1 = "INSERT INTO roles SET Username='$username' ,Email='$email' ,Roles='organizer'";
      $sql2 = "INSERT INTO organizer_signup SET Organizer_Username='$username' ,Organizer_Password='$password_1',Organizer_Email='$email', Organizer_Name='$name'
      , Organizer_Telephone='$telephone', Organizer_BankAccount='$bank'";
      mysqli_query($db, $sql1);
      mysqli_query($db, $sql2);
      $_SESSION['Organizer_Username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
  }
}

if (isset($_POST['login_user'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username)) {
      array_push($errors, "Username is required");
  }
  if (empty($password)) {
      array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {;
  	$query = "SELECT * FROM customer_signup WHERE Customer_Username='$username' AND Customer_Password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
      }else {
          array_push($errors, "Wrong username/password combination");
      }
  }
}
if (isset($_POST['pass_update'])) {
  $password_1= $_POST['Customer_Password1'];
  $password_2 = $_POST['Customer_Password2'];
  $password_3= $_POST['Customer_Password3'];

  if (empty($password_1)) { array_push($errors, "Old Password is required"); }
  if (empty($password_2)) { array_push($errors, "New Password is required"); }
  if (empty($password_3)) { array_push($errors, "Confirm New Password is required"); }
  if ($password_2 != $password_3) {array_push($errors, "The two passwords do not match");}
 
  
    // Finally, register user if there are no errors in the form
  if (count($errors) == 0) 
      {
        $password = md5($password_1);//encrypt the password before saving in the database
        $_SESSION['username'] = $username;
        $query = "UPDATE users SET password=$password_2 WHERE 'username' = $username";
        mysqli_query($db, $query);
        header('location: index.php');
      }
}

?>
?>
