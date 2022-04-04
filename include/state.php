<?php

include('../connection/connectLocation.php');
$sql='SELECT * FROM state_master WHERE country_id='.$_GET['ctry'].'';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo $row['state_id'];
    echo "~~";
    echo $row['state_name'];
    echo "~~";

  }}


?>
