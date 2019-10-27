<?php
	session_start();
	require_once "../pdo.php";
	
	//initialize variables
	$username = "";
	$email = "";
	$errors = array();
	
	// Register user_error
	if(isset($_POST['register_user'])) {
		$username = htmlspecialchars(strip_tags($_POST['username']));
		$email = htmlspecialchars(strip_tags($_POST['email']));
		$password_1 = htmlspecialchars(strip_tags($_POST['password_1']));
		$password_2 = htmlspecialchars(strip_tags($_POST['password_2']));
		
		// Ensure that the form is correctly filled by adding 
		// (array_push()) corresponding error unto $errors array
		if(empty($username)) { array_push($errors, "Username is required"); }
		if(empty($email)) { array_push($errors, "Email is required"); }
		if(empty($password_1)) { array_push($errors, "Password is required"); }
		if ($password_1 != $password_2) {
			array_push($errors, "Please ensure your passwords match");
		}
		
		// first check the database to make sure a user does not 
		// already exist with the same username and/or email
		//CHECK LATER TO MAKE MORE EFFICIENT AND CHECK 4 DUPLICATES
		/*
		$query = "SELECT * FROM users WHERE username='$username' OR
		email='$email' LIMIT 1";
		$stmt = $pdo->prepare($query)
		$stmt->execute();
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		*/
		
		if($user) { 
			if($user['username'] === $username) {
				array_push($errors, "Username already exists");
			}
			if ($user['email'] === $email) {
				array_push($errors, "email already exists");
			}
		}
		
		// Register user if no errors in the form
		if(count($errors) == 0) {
			$password = password_hash($password_1, PASSWORD_BCRYPT);
			$query = "INSERT INTO users (username, email, password) 
						VALUES('$username', '$email', '$password')";
			$stmt=$pdo->prepare($query);
			$stmt->execute();
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: store_homepage.php');
		}	
	}
	
	//USER LOGIN
	if(isset($_POST['login_user'])) {
		$username = htmlspecialchars(strip_tags($_POST['username']));
		$password = htmlspecialchars(strip_tags($_POST['password']));
		if(empty($username)) {
			array_push($errors, "Username required");
		}
		if(empty($password)) {
			array_push($errors, "Password required");
		}
		
		if(count($errors) == 0) {
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
			$query = "SELECT * FROM users WHERE username=:username";
			$stmt=$pdo->prepare($query);

			$stmt->bindValue(':username', $username);

			$stmt->execute();
			$user = $stmt->fetch(PDO::FETCH_ASSOC);
			
			if($user === false) {
				//Could not find a user with that username!
				//PS: You might want to handle this error in a more user-friendly manner!
				die('Incorrect username / password combination!');
			} 
			else {
				//User account found. Check to see if the given password matches the
				//password hash that we stored in our users table.
				$validPassword = password_verify($passwordAttempt, $user['password']);
				//If $validPassword is TRUE, the login has been successful.
			
				if($validPassword){
				
					//Provide the user with a login session.
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['logged_in'] = time();
					
					//Redirect to our protected page, which we called home.php
					header('Location: index.php');
					exit;
					
				} 
			
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	}

?>
			
		
		
		
		
		
		
		
		
		
		
		
?>