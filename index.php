<?php 
    // Allow the config
    define('__CONFIG__', true);
    // Required the config
    require_once "inc/config.php"; 
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
            <?php 
              echo "Hello World, Today is: "; 
              echo date("Y m d");
            ?>

            <p>
                <a href="login.php">LOGIN</a>
                <a href="register.php">REGISTER</a>
            </p>
        </div>

        <?php require_once "inc/footer.php"; ?>

    </body>

</html>