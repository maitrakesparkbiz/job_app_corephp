<?php
$conn = new mysqli('localhost', 'root', '','job_application');
if($conn->connect_error)
{
  echo $conn->connect_error;
}
ini_set('display_errors','Off');


?>