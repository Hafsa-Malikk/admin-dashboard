<?php
session_start(); // Start the session

if (!isset($_SESSION['email'])) {
  header('Location: login.php');
  exit();
}

// Include your database connection
require_once('db.php');

// Fetch user details from the database
$email = $_SESSION['email'];
$sql = "SELECT name, email,phone,address FROM users WHERE email = ?";
$stmt = mysqli_prepare($con, $sql);

if ($stmt) {
  mysqli_stmt_bind_param($stmt, "s", $email);
  if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_bind_result($stmt, $name, $email,$phone,$address);
    mysqli_stmt_fetch($stmt);
  } else {
    // Handle the error
    echo "Failed to execute the query: " . mysqli_error($con);
  }

  mysqli_stmt_close($stmt);
} else {
  // Handle the error
  echo "Preparation of the statement failed: " . mysqli_error($con);
}

mysqli_close($con);
?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>AridEduToolKit</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="manifest" href="site.php" />
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/meanmenu.css" />
  <link rel="stylesheet" href="css/default.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

  <!-- Add your site or application content here -->
<<<<<<< HEAD
  <?php include('nav.php'); ?>
=======
  <!-- header-start -->
  <header id="home">
    <div class="header-area">
      <div class="header-bottom-area header-sticky" style="transition: 0.6s">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-2 col-lg-2 col-md-6 col-6">
              <div class="logo">
                <a href="index.php">
                  <img src="img/logo/logo.png" alt="" />
                </a>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-6 col-6">
              <div class="header-bottom-icon f-right">
                <ul>
                  <li class="toggle-search-icon">
                    <a href="#"><span class="ti-search"></span>
                      <div class="toggle-search-box">
                        <form action="#" id="searchbox">
                          <input placeholder="Search" type="text" id="search-input">
                          <button class="button-search"><span class="ti-search"></span></button>
                        </form>
                      </div>
                    </a>
                  </li>

                </ul>
              </div>
              <div class="main-menu f-right">
                <nav id="mobile-menu" style="display: block">
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="course_01.php">Courses</a></li>
                    <li><a href="resources.php">Resources</a></li>
                    <li><a href="contact_us.php">Contact</a></li>
                    <?php
                    if (isset($_SESSION['email'])) {
                      echo '<li class="shopping-cart"><a href="#"><span class="ti-user"></span></a>
                          <ul class="submenu">
                              <li><a href="profile.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>Profile</a></li>
                              <li><a href="#" id="logout-link"><i class="fa-solid fa-right-from-bracket mr-2" aria-hidden="true"></i>Log Out</a></li>
                          </ul>
                      </li>';
                    }
                    ?>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-12">
              <div class="mobile-menu"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /end header-bottom -->
    </div>
  </header>
  <!-- header-end -->
>>>>>>> 28d5204df3045b66104478516f6909be5db54ef2
  <div class="container">
    <div class="main-body">

      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">User Profile</li>
        </ol>
      </nav>
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h4><?php echo $name; ?></h4>
                  <button class="btn btn-outline-primary">Message</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $name; ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $email; ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $phone; ?>

                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $address; ?>

                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-outline-primary" target="__blank" href="edit_profile.php">Edit</a>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
<<<<<<< HEAD
    <?php include('footer.php'); ?>
=======
  </div>
  <!-- footer start -->
  <footer id="Contact">
    <div class="footer-area primary-bg pt-100">
      <div class="container">
        <div class="footer-top pb-35">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="footer-widget mb-30">
                <div class="footer-logo">
                  <img src="img/logo/logo_2.png" width="80" class="mt-0" />
                </div>
                <div class="footer-para">
                  <p>
                    Discover a smarter way to access university course content with our content recommendation system. We provide tailored resources to enhance your learning experience, covering a wide range of academic disciplines.
                  </p>
                </div>
                <div class="footer-socila-icon">
                  <span>Follow Us</span>
                  <div class="footer-social-icon-list">
                    <ul>
                      <li>
                        <a href="#"><span class="ti-facebook"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="ti-twitter-alt"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="ti-dribbble"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="ti-google"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="ti-pinterest"></span></a>
                      </li>
                      <li>
                        <a href="#"><span class="ti-instagram"></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="footer-widget mb-30">
                <div class="footer-heading">
                  <h1>Quick Links</h1>
                </div>
                <div class="footer-menu clearfix">
                  <ul>
                    <li><a href="about_us.php">Who we are</a></li>
                    <li><a href="course_01.php">Courses</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                    <li><a href="resources.php">Learning Resources</a></li>
                    <li><a href="#">Assignment & Quizzes</a></li>
                    <li><a href="#">Chat with Admin</a></li>
                    <li><a href="faq.php">FAQs</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 d-lg-none d-xl-block col-md-6">
              <div class="footer-widget mb-30">
                <div class="footer-heading">
                  <h1>Recent Post</h1>
                </div>
                <div class="recent-post d-flex mb-25">
                  <div class="recent-post-thumb">
                    <img src="img/post/recent_post1.jpg" alt="" />
                  </div>
                  <div class="recent-post-text">
                    <p>Prime Minister Laptop Scheme</p>
                    <div class="footer-time">
                      <span class="ti-time"></span>
                      <span class="footer-published-time">05 May 2018</span>
                    </div>
                  </div>
                </div>
                <div class="recent-post d-flex">
                  <div class="recent-post-thumb">
                    <img src="img/post/recent_post1.jpg" alt="" />
                  </div>
                  <div class="recent-post-text">
                    <p>Admission Opened in Department of Social Sciences</p>
                    <div class="footer-time">
                      <span class="ti-time"></span>
                      <span class="footer-published-time">05 May 2018</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="footer-widget mb-30">
                <div class="footer-heading">
                  <h1>Contact Us</h1>
                </div>
                <div class="footer-contact-list">
                  <div class="single-footer-contact-info">
                    <span class="ti-headphone"></span>
                    <span class="footer-contact-list-text">+92-51-9292195 </span>
                  </div>
                  <div class="single-footer-contact-info">
                    <span class="ti-email"></span>
                    <span class="footer-contact-list-text">admissions@uaar.edu.pk</span>
                  </div>
                  <div class="single-footer-contact-info">
                    <span class="ti-location-pin"></span>
                    <span class="footer-contact-list-text">PMAS-Arid Agriculture University Rawalpindi,
                      Shamsabad, Muree Road Rawalpindi - Pakistan.
                    </span>
                  </div>
                </div>
                <div class="opening-time">
                  <span>Opening Hour</span>
                  <span class="opening-date">
                    Mon - Fri : 08:00 am - 06:00 pm
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom pt-25 pb-25">

        </div>
      </div>
    </div>
  </footer>
  <!-- footer end -->
>>>>>>> 28d5204df3045b66104478516f6909be5db54ef2

  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/one-page-nav-min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.meanmenu.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/jquery.barfiller.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/search.js"></script>

  <script src="../admin/alert.js"></script>



  <script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
      event.preventDefault();

      fetch('logout.php', {
          method: 'POST',
        })
        .then(response => response.json())
        .then(data => {

        })
        .catch(error => {
          console.error('An error occurred:', error);
        });
      alert("You have been logged out.")
      location.reload();

    });
  </script>





</body>

</html>