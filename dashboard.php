<?php 
  // Allow the config
  define('__CONFIG__', true);
  // Required the config
  require_once "inc/config.php"; 
  ForceLogin();

  $user_id = $_SESSION['user_id'];

  $getUserInfo = $con->prepare("SELECT email, reg_time FROM users WHERE user_id = :user_id LIMIT 1");
  $getUserInfo->bindParam(':user_id', $user_id, PDO::PARAM_INT);
  $getUserInfo->execute();

   if ($getUserInfo->rowCount() == 1) {
        //User was found
         $User = $getUserInfo->fetch(PDO::FETCH_ASSOC);  
         
   } else {
      // User is not signed in
        header("Location: logout.php"); exit;
   }

?>

<!DOCTYPE html> 
<html lang="en">
   <head>
    <meta name="description" content="Business Site - Responsive Business Template" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="keywords" content="Responsive Business Template" />
    <meta name="author" content="Promenade Themes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <title>PHP Login System</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.14/css/uikit.min.css" />

   </head>

    <body>

        <div class="uk-section uk-container">
            <h2>Dashboard</h2>
            <p>Hello <?php echo $User['email']; ?>, you registered at <?php echo $User['reg_time']; ?></p>
            <p><a href="logout.php">Logout</a></p>
        </div>

        <?php require_once "inc/footer.php"; ?>

    </body>

</html>