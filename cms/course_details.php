<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:login.php");
    exit();
}
?>
<?php
require_once("db.php");

$userName = $rating = $comments = "";

$userNameErr = $ratingErr = $commentsErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["userName"])) {
        $userNameErr = "User Name is required.";
    } else {
        $userName = $_POST["userName"];
    }

    if (empty($_POST["rating"])) {
        $ratingErr = "Rating is required.";
    } else {
        $rating = $_POST["rating"];
    }

    if (empty($_POST["comments"])) {
        $commentsErr = "Comments are required.";
    } else {
        $comments = $_POST["comments"];
    }

    if (empty($userNameErr) && empty($ratingErr) && empty($commentsErr)) {
        $sql = "INSERT INTO feedback (name, rating, comments) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($con, $sql);

        if ($stmt) {
            // Bind parameters and execute the statement
            mysqli_stmt_bind_param($stmt, "sss", $userName, $rating, $comments);

            if (mysqli_stmt_execute($stmt)) {
                echo '<div class="alert alert-info" role="alert">Feedback Submitted Successfully</div>';
            } else {
                echo "Failed to submit feedback: " . mysqli_error($con);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Preparation of the statement failed: " . mysqli_error($con);
        }
    }
}
?>


<!Doctype html>
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
<?php include('nav.php'); ?>

<<<<<<< HEAD
=======
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
                                        <form action="#" id="searchbox">
                                            <input placeholder="Search" type="text">
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
    <!-- slider-start -->
    <div class="slider-area">
        <div class="pages-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/others_bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Course Details</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Course Details</li>
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
    <div class="course-details-area gray-bg pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="single-course-details-area mb-30">
                        <div class="course-details-thumb">
                            <img src="img/courses/course_details_thumb.jpg" alt="">
                        </div>
                        <div class="single-course-details white-bg">
                            <div class="course-details-title mb-20">
                                <h1><?php echo isset($_GET['coursename']) ? urldecode($_GET['coursename']) : 'Course Name Not Found'; ?></h1>
                            </div>
                            <div class="course-details-tabs">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Curriculum</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Advisor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-reviews-tab" data-toggle="pill" href="#pills-reviews" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="course-details-overview-top">
                                            <p class="course-details-overview-para">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the grex plorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves</p>
                                            <p>No one rejects, dislikes, or avoids pleasure itself because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves expound the actual teachings of the grex plore.</p>
                                        </div>
                                        <div class="course-details-overview-bottom d-flex justify-content-between mt-25">
                                            <div class="course-overview-info-left">
                                                <div class="course-overview-info-advisor mt-10">
                                                    <span class="gray-color">Advisor : <span class="primary-color"><?php echo isset($_GET['teachername']) ? urldecode($_GET['teachername']) : 'Teacher Name Not Found'; ?></span></span>
                                                </div>
                                                <div class="course-overview-student-lecture mt-10">
                                                    <span class="gray-color">Students : <span class="primary-color">15</span></span>
                                                    <span class="student-lecture-number gray-color">Lectures: <span class="primary-color">35</span></span>
                                                </div>
                                                <div class="course-overview-time-delay mt-10">
                                                    <span class="gray-color">Time : <span class="primary-color">30 Hours</span></span>
                                                </div>
                                            </div>
                                            <div class="course-overview-info-right">
                                                <div class="course-overview-info-category mt-10">
                                                    <span class="gray-color">Category :<span class="primary-color"> Design,</span> UX/UI, Web, Print</span>
                                                </div>
                                                <div class="course-overview-info-tag mt-10">
                                                    <span class="gray-color">Tags : <span class="primary-color"> Web Development,</span> Layout</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <p class="course-details-curiculum-para">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system and expoune.</p>
                                        <div class="curiculum-lecture-details">
                                            <div class="single-curiculum-lecture table-responsive mt-20">
                                                <h4 class="primary-color font-weight-bold">Lecture Slides</h4>
                                            </div>
                                            <div class="single-curiculum-lecture table-responsive mt-10">
                                                <?php
                                                $courseName = isset($_GET['coursename']) ? urldecode($_GET['coursename']) : 'Course Name Not Found';

                                                require_once("db.php");
                                                $sql = "SELECT lecture FROM course_details WHERE coursename = '$courseName'";
                                                $result = mysqli_query($con, $sql);
                                                if ($result) {
                                                    echo '<table class="table">';
                                                    echo '<tbody>';
                                                    $lectureNumber = 1;
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $lectureFilename = $row['lecture'];
                                                        $lecturePath = '../admin/courses/' . $lectureFilename;

                                                        echo '<tr>';
                                                        echo '<td>';
                                                        echo '<span class="ti-book"></span>';
                                                        echo '<span class="chapter-name">Lecture ' . $lectureNumber . '</span>';
                                                        echo '<br>';
                                                        echo '<a href="' . $lecturePath . '" target="_blank">' . $lectureFilename . '</a>';
                                                        echo '</td>';
                                                        echo '</tr>';

                                                        $lectureNumber++;
                                                    }
                                                    echo '</tbody>';
                                                    echo '</table>';
                                                } else {
                                                    echo "Failed to fetch lecture content: " . mysqli_error($con);
                                                }
                                                ?>
                                            </div>
                                            <div class="single-curiculum-lecture table-responsive mt-20">
                                                <h4 class="primary-color font-weight-bold">Quizzes & Assignments</h4>
                                                <?php
                                                $courseName = isset($_GET['coursename']) ? urldecode($_GET['coursename']) : 'Course Name Not Found';
                                                $sql = "SELECT quiz FROM quiz_details WHERE coursename = '$courseName'";
                                                $result = mysqli_query($con, $sql);

                                                if ($result) {
                                                    echo '<table class="table">';
                                                    echo '<tbody>';
                                                    $quizNumber = 1;
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $quizFilename = $row['quiz'];
                                                        $quizPath = '../admin/quizzes/' . $quizFilename;

                                                        echo '<tr>';
                                                        echo '<td>';
                                                        echo '<span class="ti-book"></span>';
                                                        echo '<span class="chapter-name">Quiz ' . $quizNumber . '</span>';
                                                        echo '<br>';
                                                        echo '<a href="' . $quizPath . '" target="_blank">' . $quizFilename . '</a>';
                                                        echo '</td>';
                                                        echo '</tr';
                                                        $quizNumber++;
                                                    }
                                                    echo '</tbody>';
                                                    echo '</table>';
                                                } else {
                                                    echo "Failed to fetch quiz content: " . mysqli_error($con);
                                                }

                                                $courseName = isset($_GET['coursename']) ? urldecode($_GET['coursename']) : 'Course Name Not Found';
                                                $sql = "SELECT assignment FROM assignment_details WHERE coursename = '$courseName'";
                                                $result = mysqli_query($con, $sql);

                                                if ($result) {
                                                    echo '<table class="table">';
                                                    echo '<tbody>';
                                                    $assignmentNumber = 1;
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $assignmentFilename = $row['assignment'];
                                                        $assignmentPath = '../admin/assignments/' . $assignmentFilename;

                                                        echo '<tr>';
                                                        echo '<td>';
                                                        echo '<span class="ti-book"></span>';
                                                        echo '<span class="chapter-name">Assignment ' . $assignmentNumber . '</span>';
                                                        echo '<br>';
                                                        echo '<a href="' . $assignmentPath . '" target="_blank">' . $assignmentFilename . '</a>';
                                                        echo '</td>';
                                                        echo '</tr>';

                                                        $assignmentNumber++;
                                                    }
                                                    echo '</tbody>';
                                                    echo '</table>';
                                                } else {
                                                    echo "Failed to fetch assignment content: " . mysqli_error($con);
                                                }

                                                ?>
                                                <div class="single-curiculum-lecture table-responsive mt-20">
                                                    <h4 class="primary-color font-weight-bold text-center mt-3">Learning Resources</h4>
                                                    <?php
                                                    $courseName = isset($_GET['coursename']) ? urldecode($_GET['coursename']) : 'Course Name Not Found';
                                                    echo '<h4>Learn More About the ' . $courseName . '</h4>';
                                                    $subject = isset($_GET['coursename']) ? urlencode($_GET['coursename']) : 'Course Name Not Found';
                                                    $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&q={$subject}&type=video&key={$apiKey}";
                                                    $response = json_decode(file_get_contents($url), true);
                                                    $videos = $response['items'] ?? [];
                                                    foreach ($videos as $video) {
                                                        echo '<iframe class="mt-5" width="560" height="315" src="https://www.youtube.com/embed/' . $video['id']['videoId'] . '" frameborder="0" allowfullscreen></iframe>';
                                                        echo '<b>Title :' . $video['snippet']['title'] . '</b>';
                                                    }
                                                    ?>
                                                </div>
                                                <div class="single-curiculum-lecture table-responsive mt-20">
                                                    <h4 class="primary-color font-weight-bold text-center">Google Articles And Websites</h4>
                                                    <?php
                                                    $courseName = isset($_GET['coursename']) ? urldecode($_GET['coursename']) : 'Course Name Not Found';
                                                    $searchQuery = $courseName;
                                                    $searchQueryEncoded = urlencode($searchQuery);
                                                    $searchUrl = "https://www.googleapis.com/customsearch/v1?q={$searchQueryEncoded}&key={$apiKey}&cx={$cx}";
                                                    $response = json_decode(file_get_contents($searchUrl), true);
                                                    if (isset($response['items']) && !empty($response['items'])) {
                                                        echo "Websites found for " . $courseName . " tutorials:<br>";
                                                        $counter = 1;
                                                        foreach ($response['items'] as $item) {
                                                            echo "{$counter}. <a href=\"{$item['link']}\" target=\"_blank\">{$item['link']}</a><br>";
                                                            $counter++;
                                                        }
                                                    } else {
                                                        echo "No websites found for." . $courseName . "Tutorials";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="course-details-adivisor-info mt-30">
                                            <div class="course-details-adivisor-wrapper">
                                                <div class="course-details-adivisor-inner d-flex">
                                                    <div class="adivisor-thumb">
                                                        <img src="img/courses/advisors_thumb.jpg" alt="">
                                                    </div>
                                                    <div class="adivisor-text white-bg">
                                                        <div class="adivisor-text-heading d-flex mb-10">
                                                            <div class="adivisor-text-title">
                                                                <h4><?php echo isset($_GET['teachername']) ? urldecode($_GET['teachername']) : 'Teacher Name Not Found'; ?></h4>
                                                                <span>CSE Teacher</span>
                                                            </div>
                                                        </div>
                                                        <div class="adivisor-para">
                                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born, and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
                                                        </div>
                                                        <div class="advisors-social-icon-list">
                                                            <ul>
                                                                <li><a href="#"><span class="ti-facebook"></span></a></li>
                                                                <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                                                <li><a href="#"><span class="ti-dribbble"></span></a></li>
                                                                <li><a href="#"><span class="ti-google"></span></a></li>
                                                                <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                                        <div class="course-details-reviews mt-30">
                                            <div class="cours-reviews-list mb-30">
                                                <div class="course-reviews-info d-flex justify-content-between align-items-center">
                                                    <div class="reviews-author-info d-flex"></div>
                                                </div>
                                            </div>
                                            <div class="mx-0 mx-sm-auto">
                                                <div class="card">
                                                    <div class="card-header" style="background-color:#002147;">
                                                        <h5 class="card-title text-white mt-2" id="exampleModalLabel">Feedback Form</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="text-center">
                                                            <i class=" fa-4x mb-3 text-primary ti-file-alt"></i>
                                                            <p>
                                                                <strong>Your opinion matters</strong>
                                                            </p>
                                                            <p>
                                                                Have some ideas how to improve our services?
                                                                <strong>Give us your feedback.</strong>
                                                            </p>
                                                        </div>

                                                        <hr />

                                                        <form class="px-4" role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                                                            <p class="text-center"><strong>Your rating:</strong></p>

                                                            <div class="form-check mb-2">
                                                                <input type="text" class="form-control" name="userName" id="userName" placeholder="Your Name" required>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="radio" name="rating" value="Very Good" id="radio3Example1" />
                                                                <label class="form-check-label" for="radio3Example1">
                                                                    Very good
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="radio" name="rating" value="Good" id="radio3Example2" />
                                                                <label class="form-check-label" for="radio3Example2">
                                                                    Good
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="radio" name="rating" value="Medicore" id="radio3Example3" />
                                                                <label class="form-check-label" for="radio3Example3">
                                                                    Medicore
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="radio" name="rating" value="Bad" id="radio3Example4" />
                                                                <label class="form-check-label" for="radio3Example4">
                                                                    Bad
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="radio" name="rating" value="Very Bad" id="radio3Example5" />
                                                                <label class="form-check-label" for="radio3Example5">
                                                                    Very bad
                                                                </label>
                                                            </div>

                                                            <p class="text-center"><strong>What could we improve?</strong></p>

                                                            <!-- Message input -->
                                                            <div class="form-outline mb-4">
                                                                <textarea class="form-control" name="comments" id="form4Example3" rows="4"></textarea>
                                                                <label class="form-label" for="form4Example3">Your feedback</label>
                                                            </div>
                                                            <div class="card-footer faq-form-btn">
                                                                <button type="submit" class="btn m-auto d-block">Submit</button>
                                                            </div>
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
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="courses-details-sidebar-area">
                        <div class="widget mb-40 white-bg">
                            <div class="sidebar-form">
                                <form action="#">
                                    <input placeholder="Search course" type="text">
                                    <button type="submit">
                                        <i class="ti-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Category</h4>
                            <div class="widget-link">
                                <ul class="sidebar-link">
                                    <li>
                                        <a href="#">Busines Studies</a>
                                        <span>05</span>
                                    </li>
                                    <li>
                                        <a href="#">CSE Engineering</a>
                                        <span>07</span>
                                    </li>
                                    <li>
                                        <a href="#">Lerning English</a>
                                        <span>03</span>
                                    </li>
                                    <li>
                                        <a href="#">Civil Engineering</a>
                                        <span>05</span>
                                    </li>
                                    <li>
                                        <a href="#">Islamic Studies</a>
                                        <span>02</span>
                                    </li>
                                    <li>
                                        <a href="#">Banking Management</a>
                                        <span>09</span>
                                    </li>
                                    <li>
                                        <a href="#">Social Science</a>
                                        <span>13</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Recent Course</h4>
                            <div class="sidebar-rc-post">
                                <ul>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex mb-20">
                                            <div class="rc-post-thumb">
                                                <a href="blog-details.php">
                                                    <img src="img/courses/rcourses_thumb01.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="blog-details.php">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex mb-20">
                                            <div class="rc-post-thumb">
                                                <a href="blog-details.php">
                                                    <img src="img/courses/rcourses_thumb02.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="blog-details.php">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex mb-20">
                                            <div class="rc-post-thumb">
                                                <a href="blog-details.php">
                                                    <img src="img/courses/rcourses_thumb03.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="blog-details.php">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex">
                                            <div class="rc-post-thumb">
                                                <a href="blog-details.php">
                                                    <img src="img/courses/rcourses_thumb04.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="blog-details.php">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Recent Course</h4>
                            <div class="widget-tags clearfix">
                                <ul class="sidebar-tad clearfix">
                                    <li>
                                        <a href="#">CSE</a>
                                    </li>
                                    <li>
                                        <a href="#">Business</a>
                                    </li>
                                    <li>
                                        <a href="#">Study</a>
                                    </li>
                                    <li>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <a href="#">Education</a>
                                    </li>
                                    <li>
                                        <a href="#">Engineering</a>
                                    </li>
                                    <li>
                                        <a href="#">Advisor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses start -->
    <div class="courses-area courses-bg-height gray-bg pt-60 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Our Latest Courses</h1>
                        </div>
                        <div class="section-title-para">
                            <p>Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="courses-list">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <?php
                        require_once("db.php"); // Include your database connection code

                        $query = "SELECT * FROM course_details";
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $courseName = $row['coursename'];
                                $courseDescription = $row['description'];
                                $teachername = $row['teachername'];
                                $degreename = $row['degree'];
                                $coursecode = $row['coursecode'];

                                echo '<div class="courses-wrapper courses-wrapper-3 mb-30">';
                                echo '<div class="courses-thumb">';
                                echo '<img src="img/courses/coursesthumb_home3_01.jpg" alt="">';
                                echo '</div>';
                                echo '<div class="courses-content courses-content-3 clearfix">';
                                echo '<div class="courses-heading mt-25 d-flex">';
                                echo '<div class="course-title-3">';
                                echo '<h1><a href="#">' . $courseName . '</a></h1>';
                                echo '</div>';
                                echo '<div class="courses-pricing-3">';
                                echo '<span>$20.50</span>';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="courses-para mt-15">';
                                echo '<p>' . $courseDescription . '</p>';
                                echo '</div>';
                                echo '<div class="courses-wrapper-bottom clearfix mt-35">';
                                echo '<div class="courses-button">';
                                echo '<a href="course_details.php?coursename=' . urlencode($courseName) . '&description=' . urlencode($courseDescription) . '&degree=' . urlencode($degreename) . '&teachername=' . urlencode($teachername) . '&coursecode=' . urlencode($coursecode) . '">View Details</a>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo '<p>No courses found.</p>';
                        }

                        mysqli_close($con); // Close the database connection
                        ?>
                    </div>
                </div>
                <div class="courses-view-more-area mt-20 mb-30 text-center">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="courses-view-more-btn">
                                <button class="btn gray-border-btn">view more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->

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
    <?php include('footer.php'); ?>


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