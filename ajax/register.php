<?php 
    // Allow the config
    define('__CONFIG__', true);
    // Required the config
    require_once "../inc/config.php"; 

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    	// Always return JSON format
    	header('Content-Type: application/json');

    	$return = [];

    	// Make sure the user does not exist

    	// Make sure user can be added and is added

    	// Return the proper information back to Javascript to redirect us
    	$return['redirect'] = 'dashboard.php';

    	$return['name'] = "Bishal Sapkota";

    	echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else{
    	exit('test');
    }

?>