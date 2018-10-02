<?php 
  // Allow the config
  define('__CONFIG__', true);
  // Required the config
  require_once "inc/config.php";  
  ForceDashboard();
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
            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
              <form class="uk-form-stacked js-register">

                  <h2>Register</h2>
                  
                  <div class="uk-margin">
                      <label class="uk-form-label" for="form-stacked-text">Email</label>
                      <div class="uk-form-controls">
                          <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="email@email.com">
                      </div>
                  </div>

                  <div class="uk-margin">
                      <label class="uk-form-label" for="form-stacked-password">Password</label>
                      <div class="uk-form-controls">
                          <input class="uk-input" id="form-stacked-password" type="password" required="required" placeholder="Your Password">
                      </div>
                  </div>

                  <div class="uk-margin uk-alert uk-alert-danger js-error" style="display:none;"></div>

                  <div class="uk-margin">
                      <button class="uk-button uk-button-default" type="submit">Register</button>
                  </div>

              </form>
            </div>
        </div>

        <?php require_once "inc/footer.php"; ?>

    </body>

</html>