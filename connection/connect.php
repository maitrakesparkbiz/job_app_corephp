<?php
$conn = new mysqli('localhost', 'root', '','job_application');
if($conn->connect_error)
{
  echo $conn->connect_error;
}
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>