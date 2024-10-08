<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/libs/css/style.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css" />
    <style>
      html,
      body {
        height: 100%;
      }

      body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
      }
    </style>
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
      <div class="card">
        <div class="card-header text-center">
          <a href="../index.html"><img class="logo-img" src="assets/images/E OFFICE.png" alt="logo" style="width: 200px; height: 100px" /></a><span class="splash-description">Please enter your user information.</span>
        </div>
        <div class="card-body">
          <form method="POST" action="cek_login.php">
            <div class="form-group">
              <input class="form-control form-control-lg" type="text" id="username" name="username" placeholder="Username" autocomplete="off" required/>
            </div>
            <div class="form-group">
              <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Password" required/>
            </div>
            <div class="form-group">
              <label class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" /><span class="custom-control-label">Remember Me</span> </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="login" value="Login">Sign in</button>
          </form>
        </div>
        
      </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  </body>
</html>
