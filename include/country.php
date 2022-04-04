<?php
include('../connection/connectLocation.php');
$sql='SELECT * FROM `country_master`';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo $row['country_id'];
    echo "~~";
    echo $row['country_name'];
    echo "~~";



  }}


?>
