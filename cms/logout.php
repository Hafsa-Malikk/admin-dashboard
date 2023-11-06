
<?php
session_start(); // Start the session if it's not already started

if (isset($_SESSION['email'])) {
  session_unset();
  session_destroy();
  header('Location: login.php');
  exit();
} else {
  header('Location: login.php');
  exit();
}
?>
