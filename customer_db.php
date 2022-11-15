<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['reg_customer+'])) {
        $firstname = mysqli_real_escape_string($conn, $_POST['Customer_Name']);
		$lastname = mysqli_real_escape_string($conn, $_POST['Customer_Lastname']);
		$username = mysqli_real_escape_string($conn, $_POST['Customer_LOGINID']);
        $email = mysqli_real_escape_string($conn, $_POST['Customer_Email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['Customer_Password']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['Customer_Password2']);
        $telephone = mysqli_real_escape_string($conn, $_POST['Customer_Telephone']);       $birthday = mysqli_real_escape_string($conn, $_POST['Customer_Birthday']);
		$gerne = mysqli_real_escape_string($conn, $_POST['Favorite_Gerne']);
		
        if (empty($username)) {
            array_push($errors, "Username is required");
            $_SESSION['error'] = "Username is required";
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
            $_SESSION['error'] = "Email is required";
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
            $_SESSION['error'] = "Password is required";
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
            $_SESSION['error'] = "The two passwords do not match";
        }

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($result['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO customer (Customer_Username,Customer_Password,Customer_Email,Customer_Name,Customer_Lastname,Customer_Telephone,Customer_Birthday,Favorite_Gerne) VALUES ('$username','$password_1','$email','$firstname','$lastname','$telephone','$gerne')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            header("location: register.php");
        }
    }



?>
