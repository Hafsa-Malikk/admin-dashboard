<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require_once('db.php');

  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT email, password FROM users WHERE email = ?";
  $stmt = mysqli_prepare($con, $sql);

  if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $email);
    if (mysqli_stmt_execute($stmt)) {
      mysqli_stmt_bind_result($stmt, $dbEmail, $dbPassword);
      if (mysqli_stmt_fetch($stmt)) {
        if (password_verify($password, $dbPassword)) {
          $_SESSION['email'] = $email;
          header('Location: index.php'); // Redirect to the home page
          exit;
        } else {
          echo '<div class="alert alert-warning" role="alert">Invalid email or password</div>';
        }
      } else {
        echo '<div class="alert alert-warning" role="alert">Invalid email or password</div>';
      }
    } else {
      echo "Failed to execute the query: " . mysqli_error($con);
    }

    mysqli_stmt_close($stmt);
  } else {
    echo "Preparation of the statement failed: " . mysqli_error($con);
  }

  mysqli_close($con);
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    AridEduToolkit
  </title>
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-white">

  <section>
    <div class="page-header section-height-75">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain mt-8">
              <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient-success">Welcome back</h3>
                <p class="mb-0">Enter your Username and password to sign in</p>
              </div>
              <div class="card-body">
                <form role="form text-left" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                  <label>Email</label>
                  <div class="mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <label>Password</label>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0"><i class="fas fa-plus"></i>&nbsp;&nbsp;Sign In</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Don't have an account?
                  <a href="sign-up.php" class="text-info text-gradient font-weight-bold">Sign up</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
              <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    function hideAlert() {
      var alert = document.querySelector('.alert');
      if (alert) {
        setTimeout(function() {
          alert.style.display = 'none';
        }, 2000); 
      }
    }

    // Call the hideAlert function when the document is ready
    document.addEventListener('DOMContentLoaded', hideAlert);
  </script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.2"></script>
</body>

</html>