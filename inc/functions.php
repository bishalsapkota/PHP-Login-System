<?php
	
// Force The user to logged in or redirect
function ForceLogin(){
        if (isset($_SESSION['user_id'])) {
            // The User is allowed here
        } else {
          // The User is not allowed here
            header("Location: login.php"); exit;
        }
  }
function ForceDashboard() {
		if (isset($_SESSION['user_id'])) {
            // The User is allowed here but redirect anyway
            header("Location: dashboard.php"); exit;
        } else {
          // The User is not allowed here
            
        }
}



?>