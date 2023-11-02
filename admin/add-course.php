<?php include("header.php"); ?>
<?php
require_once("db.php");

$courseCode = $courseName = $teacherName = $degree = $description = "";

$courseCodeErr = $courseNameErr = $teacherNameErr = $degreeErr = $descriptionErr = $lectureErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["courseCode"])) {
    $courseCodeErr = "Course Code is required.";
  } else {
    $courseCode = $_POST["courseCode"];
  }

  if (empty($_POST["courseName"])) {
    $courseNameErr = "Course Name is required.";
  } else {
    $courseName = $_POST["courseName"];
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Degree Name is required.";
  } else {
    $degree = $_POST["degree"];
  }
  if (empty($_POST["description"])) {
    $descriptionErr = "Course Description is required.";
  } else {
    $description = $_POST["description"];
  }
  if (empty($_POST["instructorName"])) {
    $teacherNameErr = "Teacher Name is required.";
  } else {
    $teacherName = $_POST["instructorName"];
  }

  if (isset($_FILES['courseContent'])) {
    $file = $_FILES['courseContent'];

    if ($file['error'] === UPLOAD_ERR_OK) {
      $filename = uniqid() . '_' . $file['name'];
      $destination = 'courses/' . $filename;
      if (move_uploaded_file($file['tmp_name'], $destination)) {
        $lecture = $filename;
      } else {
        $lectureErr = "Failed to move the uploaded file.";
      }
    } else {
      $lectureErr = "File upload error: " . $file['error'];
    }
  }

  if (empty($courseCodeErr) && empty($courseNameErr) && empty($teacherNameErr) && empty($lectureErr) && empty($degreeErr) && empty($descriptionErr)) {
    $sql = "INSERT INTO course_details (coursecode, coursename, teachername,degree,description, lecture) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
      // Bind parameters and execute the statement
      mysqli_stmt_bind_param($stmt, "ssssss", $courseCode, $courseName, $teacherName, $degree, $description, $lecture);

      if (mysqli_stmt_execute($stmt)) {
        echo '<div class="alert alert-warning" role="alert">Data Inserted</div>';
      } else {
        echo '<div class="alert alert-warning" role="alert">' . mysqli_error($con) . '</div>';
      }

      mysqli_stmt_close($stmt);
    } else {
      echo "Preparation of the statement failed: " . mysqli_error($con);
    }
  }
}
?>



<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Courses</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">Courses</h6>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
          <input type="text" class="form-control" placeholder="Type here...">
        </div>
      </div>


      <?php include("navbar.php"); ?>




    </div>
  </div>
</nav> <!-- End Navbar -->

<div class="container-fluid py-4">
  <div class="col-md-12 text-right">
    <a class="btn bg-gradient-dark mb-0" href="add-course.php"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Course</a>
  </div><br>
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Add Course Detail</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <div class="card-body">
              <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-xl-12 col-lg-5 col-md-7 mx-auto">
                    <div class="mb-3">
                      <label for="courseCode">Course Code</label>
                      <input type="text" class="form-control" name="courseCode" id="courseCode" placeholder="TST-101" aria-label="Course Code" required>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-5 col-md-7 mx-auto">
                    <div class="mb-3">
                      <label for="courseName">Course Name</label>
                      <input type="text" class="form-control" name="courseName" id="courseName" placeholder="ex. Cyber Security" aria-label="Course Name" required>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-5 col-md-7 mx-auto">
                    <div class="mb-3">
                      <label for="instructorName">Teacher Name</label>
                      <input type="text" class="form-control" name="instructorName" id="instructorName" placeholder="ex. John Doe" aria-label="Instructor Name" required>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-5 col-md-7 mx-auto">
                    <div class="mb-3">
                      <label for="degree">Degree Name</label>
                      <input type="text" class="form-control" name="degree" id="degree" placeholder="etc Computer Science" aria-label="degree" required>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-5 col-md-7 mx-auto">
                    <div class="mb-3">
                      <label for="description">Course Description</label>
                      <input type="text" class="form-control" name="description" id="description" placeholder="Course Details" aria-label="description" required>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-5 col-md-7 mx-auto">
                    <div class="mb-3">
                      <label for="courseContent">Course Content</label>
                      <input type="file" class="form-control" name="courseContent" id="courseContent" aria-label="Course Content" required>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-dark w-20 my-4 mb-2">Submit</button>
                    </div>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</main>

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
</script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.2"></script>
</body>

</html>