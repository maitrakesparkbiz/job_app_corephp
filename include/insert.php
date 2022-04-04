<?php
include "../connection/connect.php";
if(!isset($_POST['submit']))
{

  echo "not submited";
}
else
{
  $cnt=0;
  $last_id;

  basic();
  edu($last_id);
  work($last_id);
  lang($last_id);
  tech($last_id);
  ref($last_id);
  pref($last_id);
  echo "<script>alert('Register successfully')</script>";
  echo "<script>window.location.href='../show_data.php'</script>";

}

function basic() {
global $cnt;
global $last_id;

  //basic
  include "../connection/connect.php";
   $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $designation=$_POST['designation'];
  $addr1=$_POST['addr1'];
  $addr2=$_POST['addr2'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $city=$_POST['city'];
  $country=$_POST['country'];

  $gender=$_POST['gender'];
  $state=$_POST['state'];
  $materialStatus=$_POST['materialStatus'];
  $dob=$_POST['dob'];
  $zip=$_POST['zip'];

 $sql_basic= 'INSERT INTO `basic`(`fname`, `lname`, `email`, `designation`, `addr1`, `addr2`, `phone`, `zip`, `dob`, `gender`,`country`, `state_id`, `city`, `material_status`) VALUES ("'.$firstname.'","'.$lastname.'","'.$email.'","'.$designation.'","'.$addr1.'","'.$addr2.'","'.$phone.'","'.$zip.'","'.$dob.'","'.$gender.'","'.$country.'","'.$state.'","'.$city.'","'.$materialStatus.'")';
 
 if ($conn->query($sql_basic) === TRUE) {
 
   $cnt++;
   $last_id = $conn->insert_id;
   
   
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
}



function edu($last_id) {
  global $cnt;

  include "../connection/connect.php";
  $education=$_POST['edu'];
  $len=  count($education); 
  for ($i=0; $i < $len ; $i++) { 
   
    $name= ($education[$i]['courseName']);
    
    $uni= ($education[$i]['universityName']);
    
    $year= ($education[$i]['passingYear']);
    
    $perc= ($education[$i]['percentage']);


    
     $sql_edu= 'INSERT INTO `edu_detail`( `u_id`, `option_id`, `university`, `passing_year`, `percentage`) VALUES  ('.$last_id.',"'.$name.'","'.$uni.'",'.$year.','.$perc.')';
 
    if ($conn->query($sql_edu) === TRUE) {
    
      $cnt++;
      
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}


function work($last_id) {
  global $cnt;

  include "../connection/connect.php";
  $work=$_POST['work'];
  $len=  count($work); 
  for ($i=0; $i < $len ; $i++) { 
   
     $name= ($work[$i]['companyName']);
    
     $des= ($work[$i]['designation']);
    
     $from= ($work[$i]['from']);
    
     $to= ($work[$i]['to']);

  


    
     $sql_edu= 'INSERT INTO `work_exp_detail`( `u_id`, `company_name`, `designation`, `from_date`, `to_date` ) VALUES 
                                                ('.$last_id.',"'.$name.'","'.$des.'","'.$from.'","'.$to.'")';
 
    if ($conn->query($sql_edu) === TRUE) {
    
      $cnt++;
      
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}



function lang($last_id) {
  global $cnt;

  include "../connection/connect.php";
  $lang=$_POST['lang'];
  $len=  count($lang); 
  for ($i=0; $i < $len ; $i++) { 
   
     $name= ($lang[$i]['language']);
    
     $read= ($lang[$i]['read']);
    
     $write= ($lang[$i]['write']);
    
     $speak= ($lang[$i]['speak']);

    $sql_read='SELECT id FROM `option_master` where name="'.$name.'_'.$read.'" ';
    echo $sql_read;
    $result = $conn->query($sql_read);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        echo $sql_edu= 'INSERT INTO `Language_detail`(`u_id`, `option_id`) VALUES 
        ('.$last_id.','.$row['id'].')';
 
        if ($conn->query($sql_edu) === TRUE) {
        
          $cnt++;
          
          
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      
      }
    }

    $sql_write='SELECT id FROM `option_master` where name="'.$name.'_'.$write.'" ';
    $result = $conn->query($sql_write);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        echo $sql_edu= 'INSERT INTO `Language_detail`(`u_id`, `option_id`) VALUES 
        ('.$last_id.','.$row['id'].')';
 
        if ($conn->query($sql_edu) === TRUE) {
        
          $cnt++;
          
          
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      
      }
    }

    $sql_speak='SELECT id FROM `option_master` where name="'.$name.'_'.$speak.'" ';
    $result = $conn->query($sql_speak);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        echo $sql_edu= 'INSERT INTO `Language_detail`(`u_id`, `option_id`) VALUES 
        ('.$last_id.','.$row['id'].')';
 
        if ($conn->query($sql_edu) === TRUE) {
        
          $cnt++;
          
          
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        } 
      }
    }
  }
}


function tech($last_id) {
  global $cnt;

  include "../connection/connect.php";
  $tech=$_POST['tech'];
  $len=  count($tech); 
  for ($i=0; $i < $len ; $i++) { 
   
     $name= ($tech[$i]['technology']);
     $status= ($tech[$i]['status']);    
     $sql_tech= 'INSERT INTO `technology_detail`( `u_id`, `option_id`, `status`) VALUES ('.$last_id.','.$name.',"'.$status.'")';
     echo $sql_tech;
 
    if ($conn->query($sql_tech) === TRUE) {
    
      $cnt++;
      
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

function ref($last_id) {
  global $cnt;

  include "../connection/connect.php";
  $ref=$_POST['ref'];
  $len=  count($ref); 
  for ($i=0; $i < $len ; $i++) { 
   
     $name= ($ref[$i]['refName']);
     $contact= ($ref[$i]['refContact']);
     $relation= ($ref[$i]['refRelation']);    
      $sql_ref= 'INSERT INTO `reff_`(`u_id`, `name`, `contact_no`, `relation`) VALUES ('.$last_id.',"'.$name.'","'.$contact.'","'.$relation.'")';
 
    if ($conn->query($sql_ref) === TRUE) {
    
      $cnt++;
      
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

function pref($last_id) {
  global $cnt;

  include "../connection/connect.php";
  echo($location=$_POST['location']);
  echo $len=  count($location); 
  for ($i=0; $i < $len ; $i++) { 
   
     $name= $location[$i];
      $noticePeriod=$_POST['noticePeriod'];
      $currentCTC=$_POST['currentCTC'];
      $expectedCTC=$_POST['expectedCTC'];
      $department=$_POST['department'];

      


     echo $sql_pref= 'INSERT INTO `Preferance_detail`( `u_id`, `location_option_id`, `notice_period`, `current_ctc`, `exp_ctc`, `dept_option_id`) VALUES ('.$last_id.','.$name.',"'.$noticePeriod.'",'.$currentCTC.','.$expectedCTC.',"'.$department.'")';
 
    if ($conn->query($sql_pref) === TRUE) {
    
      $cnt++;
      
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}