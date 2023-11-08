<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AridEduToolKit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.php">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header-start -->
    <!-- /end header-top -->
    <!-- header-bottom -->
    <div class="header-bottom-area header-sticky" style="transition: .6s;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                    <div class="logo">
                        <a href="index.php">
                            <img src="img/logo/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                    <div class="header-bottom-icon f-right">
                        <ul>
                            <li class="toggle-search-icon"><a href="#"><span class="ti-search"></span>
                                    <div class="toggle-search-box">
                                        <form action="#" id="event-searchbox">
                                            <input placeholder="Search Events" type="text" id="event-search-input">
                                            <button class="button-search"><span class="ti-search"></span></button>
                                        </form>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="main-menu f-right">
                        <nav id="mobile-menu" style="display: block;">
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
        <div class="pages-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/others_bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Learning Resources</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- courses start -->
    <div class="events-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="events-list" id="events-list">
                <div class="row">
                    <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                        <div class="single-events mb-30">
                            <div class="events-wrapper events-wrapper-padding">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <a href="event_details.php"><img src="img/events/wepik-export-202310260546294Cs6.jpeg" width="180" height="150" alt=""></a>
                                    </div>
                                    <div class="events-text white-bg">
                                        <div class="event-text-heading mb-20">
                                            <div class="events-calendar text-center f-left">
                                                <span class="date">25</span>
                                                <span class="month">Sep, 2018</span>
                                            </div>
                                            <div class="events-text-title clearfix">
                                                <a href="#">
                                                    <h4>Theory of Automata</h4>
                                                </a>
                                                <div class="time-area">
                                                    <span class="ti-time"></span>
                                                    <span class="published-time">05:23 AM - 09:23 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p>Event is veries fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                        </div>
                                        <div class="events-speaker">
                                            <h2>Subject : <span>Computer Science</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                        <div class="single-events mb-30">
                            <div class="events-wrapper events-wrapper-padding">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <a href="event_details.php"><img src="img/events/small_events_thumb_02.jpg" alt=""></a>
                                    </div>
                                    <div class="events-text white-bg">
                                        <div class="event-text-heading mb-20">
                                            <div class="events-calendar text-center f-left">
                                                <span class="date">25</span>
                                                <span class="month">Sep, 2018</span>
                                            </div>
                                            <div class="events-text-title clearfix">
                                                <a href="#">
                                                    <h4>Linear Algebra</h4>
                                                </a>
                                                <div class="time-area">
                                                    <span class="ti-time"></span>
                                                    <span class="published-time">05:23 AM - 09:23 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p>Event is veries fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                        </div>
                                        <div class="events-speaker">
                                            <h2>Subject : <span>General Computing</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                        <div class="single-events mb-30">
                            <div class="events-wrapper events-wrapper-padding">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <a href="event_details.php"><img src="img/events/small_events_thumb_03.jpg" alt=""></a>
                                    </div>
                                    <div class="events-text white-bg">
                                        <div class="event-text-heading mb-20">
                                            <div class="events-calendar text-center f-left">
                                                <span class="date">25</span>
                                                <span class="month">Sep, 2018</span>
                                            </div>
                                            <div class="events-text-title clearfix">
                                                <a href="#">
                                                    <h4>Linear Algebra</h4>
                                                </a>
                                                <div class="time-area">
                                                    <span class="ti-time"></span>
                                                    <span class="published-time">05:23 AM - 09:23 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p>Event is veries fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                        </div>
                                        <div class="events-speaker">
                                            <h2>Subject : <span>General Computing</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                        <div class="single-events mb-30">
                            <div class="events-wrapper events-wrapper-padding">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <a href="event_details.php"><img src="img/events/small_events_thumb_03.jpg" alt=""></a>
                                    </div>
                                    <div class="events-text white-bg">
                                        <div class="event-text-heading mb-20">
                                            <div class="events-calendar text-center f-left">
                                                <span class="date">25</span>
                                                <span class="month">Sep, 2018</span>
                                            </div>
                                            <div class="events-text-title clearfix">
                                                <a href="#">
                                                    <h4>Cloud Computing</h4>
                                                </a>
                                                <div class="time-area">
                                                    <span class="ti-time"></span>
                                                    <span class="published-time">05:23 AM - 09:23 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p>Event is veries fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                        </div>
                                        <div class="events-speaker">
                                            <h2>Subject : <span>Software Engineering</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                        <div class="single-events mb-30">
                            <div class="events-wrapper events-wrapper-padding">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <a href="event_details.php"><img src="img/events/small_events_thumb_02.jpg" alt=""></a>
                                    </div>
                                    <div class="events-text white-bg">
                                        <div class="event-text-heading mb-20">
                                            <div class="events-calendar text-center f-left">
                                                <span class="date">25</span>
                                                <span class="month">Sep, 2018</span>
                                            </div>
                                            <div class="events-text-title clearfix">
                                                <a href="#">
                                                    <h4>Web Engineering</h4>
                                                </a>
                                                <div class="time-area">
                                                    <span class="ti-time"></span>
                                                    <span class="published-time">05:23 AM - 09:23 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p>Event is veries fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                        </div>
                                        <div class="events-speaker">
                                            <h2>Subject : <span>Software Engineering </span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                        <div class="single-events mb-30">
                            <div class="events-wrapper events-wrapper-padding">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <a href="event_details.php"><img src="img/events/small_events_thumb_03.jpg" alt=""></a>
                                    </div>
                                    <div class="events-text white-bg">
                                        <div class="event-text-heading mb-20">
                                            <div class="events-calendar text-center f-left">
                                                <span class="date">25</span>
                                                <span class="month">Sep, 2018</span>
                                            </div>
                                            <div class="events-text-title clearfix">
                                                <a href="#">
                                                    <h4>Artificial Intelligence</h4>
                                                </a>
                                                <div class="time-area">
                                                    <span class="ti-time"></span>
                                                    <span class="published-time">05:23 AM - 09:23 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p>Event is veries fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                        </div>
                                        <div class="events-speaker">
                                            <h2>Subject : <span>Computer Science</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="single-events-btn mt-15 mb-30">
                            <nav class="course-pagination mb-30" aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="ti-angle-left"></span></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="ti-angle-right"></span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
    <!-- brand start -->
    <div class="brand-area pt-80 pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                </div>
            </div>
        </div>
    </div>
    <!-- brand end -->
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
                                    <span>Enter your email and get latest updates and offers subscribe us</span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-4 justify-content-end">
                                <div class="email-submit-form">
                                    <div class="subscribe-form">
                                        <form action="#">
                                            <input placeholder="Enter your email" type="email">
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
                                    <img src="img/logo/logo_2.png" alt="">
                                </div>
                                <div class="footer-para">
                                    <p> Discover a smarter way to access university course content with our content recommendation system. We provide tailored resources to enhance your learning experience, covering a wide range of academic disciplines.</p>
                                </div>
                                <div class="footer-socila-icon">
                                    <span>Follow Us</span>
                                    <div class="footer-social-icon-list">
                                        <ul>
                                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                            <li><a href="#"><span class="ti-dribbble"></span></a></li>
                                            <li><a href="#"><span class="ti-google"></span></a></li>
                                            <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                            <li><a href="#"><span class="ti-instagram"></span></a></li>
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
                                        <img src="img/post/recent_post1.jpg" alt="">
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
                                        <img src="img/post/recent_post1.jpg" alt="">
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
                        <div class="col-xl-3 col-lg-4  col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Contact Us</h1>
                                </div>
                                <div class="footer-contact-list">
                                    <div class="single-footer-contact-info">
                                        <span class="ti-headphone "></span>
                                        <span class="footer-contact-list-text">+92-51-9292195 </span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-email "></span>
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
                                <div class="footer-copyright text-center">
                                    <span><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
                                </div>
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
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        function performEventSearch() {
            const searchInput = document.getElementById("event-search-input").value.toLowerCase();
            const eventList = document.getElementById("events-list");

            const eventItems = eventList.querySelectorAll(".single-events");

            for (const eventItem of eventItems) {
                const eventTitle = eventItem.querySelector(".events-text-title h4").innerText.toLowerCase();
                if (eventTitle.includes(searchInput)) {
                    eventItem.style.display = "block";
                } else {
                    eventItem.style.display = "none";
                }
            }
        }

        document.getElementById("event-search-input").addEventListener("input", performEventSearch);

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