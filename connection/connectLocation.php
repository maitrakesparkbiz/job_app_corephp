<?php
$conn = new mysqli('localhost', 'root', '','dynamic _location');
if($conn->connect_error)
{
  echo $conn->connect_error;
}
?>