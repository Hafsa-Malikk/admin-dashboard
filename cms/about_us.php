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
  <!-- header-start -->
  <header id="home">
    <div class="header-area">
      <!-- header-bottom -->
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
                <h1 class="white-color f-700">About Us</h1>
                <nav class="text-center" aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      About Us
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
  <!-- about start -->
  <div id="about" class="about-area pt-100 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-xl-7 col-lg-7">
          <div class="about-img mb-55">
            <img src="img/about/about_details_left_img.jpg" alt="" />
          </div>
          <div class="about-title-section about-title-section-2 mb-30">
            <h1>Who We Are</h1>
            <p>
              Welcome to our cutting-edge content recommendation system, where
              we revolutionize the way you discover and access course content
              tailored to your university's programs. Our platform is designed
              to simplify your learning experience, connecting you with the
              most relevant and up-to-date resources. Whether you're a student
              looking to excel in your university courses or an academic
              seeking to enhance your teaching materials, our intuitive system
              offers a personalized approach to education. With a wide array
              of courses, ranging from computer science and engineering to
              humanities and social sciences, we ensure that you have access
              to precisely what you need. Join us today, and let's make your
              academic journey even more engaging and enriching.
            </p>
          </div>
        </div>
        <div class="col-xl-5 col-lg-5">
          <div class="about-img mb-55">
            <img src="img/about/about_details_right_img.jpg" alt="" />
          </div>
          <div class="about-title-section about-title-section-2 mb-30">
            <h1>Our Mission Vission</h1>
            <p>
              To empower learners worldwide with personalized, high-quality
              education, fostering their growth and success in a rapidly
              changing world. <br /><b>Vision:</b><br />
              To be a global leader in innovative, accessible, and
              personalized learning solutions, driving positive change in
              education and beyond.
            </p>
          </div>
        </div>
      </div>
      <div class="row mt-60">
        <div class="col-xl-12">
          <div class="university-banner mb-30">
            <img src="img/about/university.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- about end -->

  <!-- counter start -->
  <div class="counter-area primary-bg">
    <div class="container pt-90 pb-65">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3">
          <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
            <img src="img/counter/counter_icon1.png" alt="" />
            <span class="counter">10532</span>
            <h3>Satisfied Students</h3>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3">
          <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
            <img src="img/counter/counter_icon2.png" alt="" />
            <span class="counter">7985</span>
            <h3>Course Material</h3>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3">
          <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
            <img src="img/counter/counter_icon3.png" alt="" />
            <span class="counter">5382</span>
            <h3>Learning Resources</h3>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3">
          <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
            <img src="img/counter/counter_icon4.png" alt="" />
            <span class="counter">354</span>
            <h3>Admin Support</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- counter end -->
  <!-- team start -->
  <div class="team-area pt-95 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
          <div class="section-title mb-50 text-center">
            <div class="section-title-heading mb-20">
              <h1 class="primary-color">Our Experience Advisors</h1>
            </div>
            <div class="section-title-para">
              <p class="gray-color">
                Our experienced advisors are dedicated to guiding you through
                your educational journey, drawing on their expertise to help
                you make informed decisions and achieve your academic and
                career goals.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="team-list">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="team-wrapper mb-30">
              <div class="team-thumb">
                <img src="img/team/teammember1.jpg" alt="" />
              </div>
              <div class="team-social-info text-center">
                <div class="team-social-icon-list">
                  <ul>
                    <li>
                      <a href="#"><span class="ti-facebook"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-twitter-alt"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-google"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-linkedin"></span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-teacher-info text-center">
                <h1>Sir Azhar Manzoor</h1>
                <h2>Mobile App Developer</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="team-wrapper mb-30">
              <div class="team-thumb">
                <img src="img/team/teammember2.jpg" alt="" />
              </div>
              <div class="team-social-info text-center">
                <div class="team-social-icon-list">
                  <ul>
                    <li>
                      <a href="#"><span class="ti-facebook"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-twitter-alt"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-google"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-linkedin"></span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-teacher-info text-center">
                <h1>Ms. Saba-un-Nisa</h1>
                <h2>Lecturer</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="team-wrapper mb-30">
              <div class="team-thumb">
                <img src="img/team/teammember3.jpg" alt="" />
              </div>
              <div class="team-social-info text-center">
                <div class="team-social-icon-list">
                  <ul>
                    <li>
                      <a href="#"><span class="ti-facebook"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-twitter-alt"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-google"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-linkedin"></span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-teacher-info text-center">
                <h1>Dr. Asif Nawaz</h1>
                <h2>Sr. Lecturer</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="team-wrapper mb-30">
              <div class="team-thumb">
                <img src="img/team/teammember4.jpg" alt="" />
              </div>
              <div class="team-social-info text-center">
                <div class="team-social-icon-list">
                  <ul>
                    <li>
                      <a href="#"><span class="ti-facebook"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-twitter-alt"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-google"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-linkedin"></span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <?php
              require_once("db.php");

              $sql = "SELECT * FROM teacher_details"; // Change 'Dr. Sadia' to the teacher's name you want to display

              $result = mysqli_query($con, $sql);

              if ($result) {
                $teacherDetails = mysqli_fetch_assoc($result);

                if ($teacherDetails) {
                  $teacherName = $teacherDetails['teachername'];
                  $teacherPosition = $teacherDetails['position'];

                  echo '<div class="team-teacher-info text-center">';
                  echo '<h1>' . $teacherName . '</h1>';
                  echo '<h2>' . $teacherPosition . '</h2>';
                  echo '</div>';
                } else {
                  echo "Teacher not found.";
                }
              } else {
                echo "Failed to retrieve teacher details: " . mysqli_error($con);
              }

              // Close the database connection
              mysqli_close($con);
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- team end -->
  <!-- testimonials start -->
  <div class="testimonilas-area pt-100 pb-90 gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
          <div class="section-title mb-50 text-center">
            <div class="section-title-heading mb-20">
              <h1 class="primary-color">What Our Students Say</h1>
            </div>
            <div class="section-title-para">
              <p class="gray-color">
                Check out our latest reviews to hear what our satisfied users
                have to say about their experiences, and discover why our
                platform is the trusted choice for quality education and
                support.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonilas-list">
        <div class="row testimonilas-active">
          <div class="col-xl-12">
            <div class="testimonilas-wrapper mb-110">
              <div class="testimonilas-heading d-flex">
                <div class="testimonilas-author-thumb">
                  <img src="img/testimonials/testimonilas_author_thumb1.png" alt="" />
                </div>
                <div class="testimonilas-author-title">
                  <h1>Lisa McClanahan</h1>
                  <h2>CSE Student</h2>
                </div>
              </div>
              <div class="testimonilas-para">
                <p>
                  But also the leap into electronic type reman see essentially
                  unchanged. It was popul arised thew with the release of
                  letraset sheets.
                </p>
              </div>
              <div class="testimonilas-rating">
                <ul>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="testimonilas-wrapper">
              <div class="testimonilas-heading d-flex">
                <div class="testimonilas-author-thumb">
                  <img src="img/testimonials/testimonilas_author_thumb1.png" alt="" />
                </div>
                <div class="testimonilas-author-title">
                  <h1>Lisa McClanahan</h1>
                  <h2>CSE Student</h2>
                </div>
              </div>
              <div class="testimonilas-para">
                <p>
                  But also the leap into electronic type reman see essentially
                  unchanged. It was popul arised thew with the release of
                  letraset sheets.
                </p>
              </div>
              <div class="testimonilas-rating">
                <ul>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="testimonilas-wrapper">
              <div class="testimonilas-heading d-flex">
                <div class="testimonilas-author-thumb">
                  <img src="img/testimonials/testimonilas_author_thumb2.png" alt="" />
                </div>
                <div class="testimonilas-author-title">
                  <h1>Trevor J. Angelo</h1>
                  <h2>Englisg Student</h2>
                </div>
              </div>
              <div class="testimonilas-para">
                <p>
                  But also the leap into electronic type reman see essentially
                  unchanged. It was popul arised thew with the release of
                  letraset sheets.
                </p>
              </div>
              <div class="testimonilas-rating">
                <ul>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="testimonilas-wrapper">
              <div class="testimonilas-heading d-flex">
                <div class="testimonilas-author-thumb">
                  <img src="img/testimonials/testimonilas_author_thumb1.png" alt="" />
                </div>
                <div class="testimonilas-author-title">
                  <h1>Marquita Brown</h1>
                  <h2>CSE Student</h2>
                </div>
              </div>
              <div class="testimonilas-para">
                <p>
                  But also the leap into electronic type reman see essentially
                  unchanged. It was popul arised thew with the release of
                  letraset sheets.
                </p>
              </div>
              <div class="testimonilas-rating">
                <ul>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                  <li><span class="ti-star"></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- testimonials end -->

  <!-- subscribe start -->
  <div class="subscribe-area">
    <div class="container">
      <div class="subscribe-box">
        <div class="row">
          <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
            <div class="row justify-content-between">
              <div class="col-xl-6 col-lg-7 col-md-8">
                <div class="subscribe-text">
                  <h1>Subscribe</h1>
                  <span>Enter your email and get latest updates and offers
                    subscribe us</span>
                </div>
              </div>
              <div class="col-xl-4 col-lg-5 col-md-4 justify-content-end">
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
  <footer id="Contact">
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
                    Discover a smarter way to access university course content
                    with our content recommendation system. We provide
                    tailored resources to enhance your learning experience,
                    covering a wide range of academic disciplines.
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
                      Shamsabad, Muree Road Rawalpindi - Pakistan. </span>
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
              <div class="col-xl-12">
              </div>
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