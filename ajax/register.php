<?php 
    // Allow the config
    define('__CONFIG__', true);
    // Required the config
    require_once "../inc/config.php"; 

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    	// Always return JSON format
    	//header('Content-Type: application/json');

    	$return = [];

        $email = Filter::String($_POST['email']);

        // Make sure the user does not exist
        $findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");
        $findUser->bindParam(':email',$email, PDO::PARAM_STR);
        $findUser->execute(); 

        if ($findUser->rowCount() == 1) {
             // user exist  
            //we can also check to see if thery are able to log in 
            $return['error'] = "You already have an account";
            $return['is_logged_in'] = false;
        } else {
            // user does not exist , add them now 

            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $addUser = $con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
            $addUser->bindParam(':email',$email, PDO::PARAM_STR);
            $addUser->bindParam(':password',$password, PDO::PARAM_STR);
            $addUser->execute();

            $user_id = $con->lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;

            $return['redirect'] = 'dashboard.php?message=welcome';
            $return['is_logged_in'] = true;
        }

    	// Make sure user can be added and is added

    	// Return the proper information back to Javascript to redirect us

    	$return['name'] = "Bishal Sapkota";

    	echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else{
    	exit('Invalid URL');
    }

?>