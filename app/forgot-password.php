<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("layouts/header.php") ?>
</head>
<body class="login-page">
  <section class="h-100">
    <div class="container h-100">
      <div class="row  h-100">
          <div class="brand-lg">
            <img src="assets/images/logoteam-alpha.png">
          </div>
          <div class="card-wrapper">
          <div class="brand">
            <a href="index.php">
              <img src="assets/images/logoteam-alpha.png">
            </a>
          </div>
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Forgot Password</h4>
              <div class="text-center">
              <p>Enter your email address and we will send you instructions on how to reset your password.</p>
              </div>
              <form method="POST">
                <div class="form-row form-group">
                  <label for="email">Email</label>
                  <input class="form-control" name="email" id="email" type="text"  placeholder="Email">
                </div>
                <div class="form-row no-margin">
                  <button type="submit" class="btn btn-success btn-block">
                    Register
                  </button>
                </div>
                <div class="margin-top20 text-center">
                  <a href="register.php"> Register an account</a> | <a href="login.php">Login now</a>
                </div>
              </form>
            </div>
          </div>
          <div class="footer">
            Copyright &copy; 2018 &mdash; UPOU-CMSC-207-Team-Alpha 
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>