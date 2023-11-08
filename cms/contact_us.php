<?php
$name = $email = $subject = $experience = $message = "";
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require_once("db.php");
  $name = isset($_POST["name"]) ? $_POST["name"] : "";
  $email = isset($_POST["email"]) ? $_POST["email"] : "";
  $subject = isset($_POST["subject"]) ? $_POST["subject"] : "";
  $experience = isset($_POST["experience"]) ? $_POST["experience"] : "";
  $message = isset($_POST["message"]) ? $_POST["message"] : "";
  if (empty($name)) {
    $errors[] = "Name is required.";
  }
  if (empty($email)) {
    $errors[] = "Email is required.";
  }
  if (empty($subject)) {
    $errors[] = "Subject is required.";
  }
  if (empty($experience)) {
    $errors[] = "Experience is required.";
  }
  if (empty($message)) {
    $errors[] = "Message is required.";
  }

  if (empty($errors)) {
    $sql = "INSERT INTO contactus (name, email, subject, experience, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $subject, $experience, $message);

      if (mysqli_stmt_execute($stmt)) {
        echo '<div class="alert alert-warning" role="alert">Your message has been submitted. We will get back to you soon.</div>';
      } else {
        echo '<div class="alert alert-warning" role="alert">Failed to save your message: ' . mysqli_error($con) . '</div>';
      }

      mysqli_stmt_close($stmt);
    } else {
      echo "Preparation of the statement failed: " . mysqli_error($con);
    }
  } else {
    foreach ($errors as $error) {
      echo '<div class="alert alert-warning" role="alert">' . $error . '</div>';
    }
  }

  // Close the database connection
  mysqli_close($con);
}
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
  <link rel="stylesheet" href="css/meanmenu.css" />
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/default.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Add your site or application content here -->
  <!-- header-start -->
  <header id="home">
    <div class="header-area header-sticky">
      <!-- header-top -->

      <!-- header-bottom -->
      <div class="header-bottom-area" style="transition: 0.6s">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-2 col-lg-2 col-md-6 col-6">
              <div class="logo">
                <a href="index_2.php">
                  <img src="img/logo/logo.png" alt="" />
                </a>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-6 col-6">
              <div class="header-bottom-icon f-right">
                <ul>
                  <li>
                    <a href="#"><span class="ti-search"></span></a>
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
                    session_start();
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
  <!-- slider-start -->
  <div class="slider-area">
    <div class="page-title">
      <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/others_bg.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="slider-content slider-content-breadcrumb text-center">
                <h1 class="white-color f-700">Contact Us</h1>
                <nav class="text-center" aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Contact Us
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider-end -->
  <!-- courses start -->
  <div class="advisors-area gray-bg pt-95 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
          <div class="contact-info-text">
            <div class="section-title mb-20">
              <div class="section-title-heading mb-10">
                <h1>Contact Info</h1>
              </div>
              <div class="section-title-para">
                <p>
                  We're here to answer your questions, address your concerns, and provide the support you need for a seamless educational experience.
                </p>
              </div>
            </div>
          </div>
          <div class="contact-info mb-50 wow fadeInRight" data-wow-delay=".3s" style="
                visibility: visible;
                animation-delay: 0.3s;
                animation-name: fadeInRight;
              ">
            <ul>
              <li>
                <div class="contact-icon">
                  <i class="ti-headphone"></i>
                </div>
                <div class="contact-text">
                  <h5>Call Us</h5>
                  <span>+92-51-9292195 </span>
                </div>
              </li>
              <li>
                <div class="contact-icon">
                  <i class="ti-email"></i>
                </div>
                <div class="contact-text">
                  <h5>Email Us</h5>
                  <span>admissions@uaar.edu.pk</span>
                </div>
              </li>
              <li>
                <div class="contact-icon">
                  <i class="ti-location-pin"></i>
                </div>
                <div class="contact-text">
                  <h5>Location</h5>
                  <span>PMAS-Arid Agriculture University Rawalpindi,
                    Shamsabad, Muree Road Rawalpindi - Pakistan. </span>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-7 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
          <div class="events-details-form faq-area-form mb-30 p-0">
            <form class="row" role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="col-xl-8">
                <div class="events-form-title mb-25">
                  <h2>Do You Have Any Questions</h2>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <input name="name" placeholder="Name :" type="text" />
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <input name="email" placeholder="Email :" type="text" />
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <input name="subject" placeholder="Subject :" type="text" />
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <input name="experience" placeholder="Experience :" type="text" />
              </div>
              <div class="col-xl-12">
                <textarea name="message" cols="30" rows="10" placeholder="Message :"></textarea>
              </div>
              <div class="col-xl-12">
                <div class="faq-form-btn events-form-btn">
                  <button class="btn m-0">Submit Now</button>
                </div>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- courses end -->
  <!-- map start -->
  <!-- map end -->
  <!-- brand start -->
  <!-- brand end -->
  <!-- subscribe start -->
  <div class="subscribe-area">
    <div class="container">
      <div class="subscribe-box">
        <div class="row">
          <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
            <div class="row">
              <div class="col-xl-7 col-lg-7 col-md-8">
                <div class="subscribe-text">
                  <h1>Subscribe</h1>
                  <span>Enter your email and get latest updates and offers
                    subscribe us</span>
                </div>
              </div>
              <div class="col-xl-5 col-lg-5 col-md-4">
                <div class="email-submit-form">
                  <div class="subscribe-form">
                    <form action="#">
                      <input placeholder="Enter your email" type="email" />
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- subscribe end -->
  <!-- footer start -->
  <footer>
    <div class="footer-area primary-bg pt-150">
      <div class="container">
        <div class="footer-top pb-35">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="footer-widget mb-30">
                <div class="footer-logo">
                  <img src="img/logo/logo_2.png" alt="" />
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
                    <span class="footer-contact-list-text">+92-51-9292195
                    </span>
                  </div>
                  <div class="single-footer-contact-info">
                    <span class="ti-email"></span>
                    <span class="footer-contact-list-text">admissions@uaar.edu.pk</span>
                  </div>
                  <div class="single-footer-contact-info">
                    <span class="ti-location-pin"></span>
                    <span class="footer-contact-list-text">PMAS-Arid Agriculture University Rawalpindi, Shamsabad,
                      Muree Road Rawalpindi - Pakistan.</span>
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
          <div class="container">
            <div class="row">
              <div class="col-xl-12"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer end -->

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
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/jquery.barfiller.js"></script>
  <script src="js/jquery.meanmenu.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/search.js"></script>


  <script>
    function hideAlert() {
      var alerts = document.querySelectorAll('.alert');
      if (alerts) {
        setTimeout(function() {
          alerts.forEach(function(alert) {
            alert.style.display = 'none';
          });
        }, 2000); // Adjust the duration as needed
      }
    }

    document.addEventListener('DOMContentLoaded', hideAlert);


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