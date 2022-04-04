<?php


include('../connection/connectLocation.php');
$sql='SELECT * FROM `city_master` WHERE state_id='.$_GET['state'].'';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo $row['city_id'];
    echo "~~";
    echo $row['city_name'];
    echo "~~";

  }}


?>
