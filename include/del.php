<?php
include "../connection/connect.php";
  $del_all_data= 'DELETE FROM `basic` WHERE id='.$_GET['id'].'';
 
 if ($conn->query($del_all_data) === TRUE) {
 
   echo "<script>alert('Delete successfully')</script>";
   echo "<script>window.location.href='../show_data.php'</script>";
   
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
   

?>