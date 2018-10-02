<?php

  // If there is no constant defined called __CONFIG__, do not load this file
  if(!defined('__CONFIG__')) {
    exit('You do not have a config file');
  }

	
class Page {

    // Force The user to logged in or redirect
    static function ForceLogin(){
            if (isset($_SESSION['user_id'])) {
                // The User is allowed here
            } else {
              // The User is not allowed here
                header("Location: login.php"); exit;
            }
      }
      
      static function ForceDashboard() {
          if (isset($_SESSION['user_id'])) {
                  // The User is allowed here but redirect anyway
                  header("Location: dashboard.php"); exit;
              } else {
                // The User is not allowed here
                  
              }
      }

}

?>