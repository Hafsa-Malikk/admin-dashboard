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





  function deleteTeacher(teacherId) {
    if (confirm("Are you sure you want to delete this Teacher?")) {
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "deletecourse.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          if (xhr.responseText === "success") {
            var row = document.getElementById("courseRow_" + teacherId);
            if (row) {
              row.parentNode.removeChild(row);
            }
          } else {
            alert("Failed to delete the course.");
          }
        }
      };
      xhr.send("teacherId=" + teacherId);
    }
  }

  function editTeacher(teacherId) {
    window.location.href = "editteacher.php?teacherId=" + teacherId;
  }


  // Search Function

  document.addEventListener('DOMContentLoaded', function() {
    const searchCourseInput = document.getElementById('searchCourse');
    const tableRows = document.querySelectorAll('table tbody tr');

    searchCourseInput.addEventListener('input', function() {
      const searchValue = searchCourseInput.value.toLowerCase();
      tableRows.forEach(function(row) {
        const courseName = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
        if (courseName.includes(searchValue)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  });