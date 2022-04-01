<?php
include('../job_app/connection/connect.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>job Application </title>
  <style>
    a{
      text-decoration: none;
      color: black;
    }
  </style>
</head>
<body>
  <h1>show data</h1>
  <form action="/job_app/show_data.php" method="get">
    <input type="hidden" name="total" value="10">
    <input type="hidden" name="id" value="0">
    <select name="lang" id="lang">
    <option value=""></option>
<?php
$sql_select='SELECT id,name FROM `option_master` where option_master.id>4 and option_master.id<14';
$result_select = $conn->query($sql_select);
if ($result_select->num_rows > 0) {
  // output data of each row
  while ($row = $result_select->fetch_assoc()) {
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';

  }}

?>
</select>
<select name="tech" id="tech">
<option value=""></option>
<?php
$sql_select='SELECT id,name FROM `option_master` WHERE s_id =5;';
$result_select = $conn->query($sql_select);
if ($result_select->num_rows > 0) {
  // output data of each row
  while ($row = $result_select->fetch_assoc()) {
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';

  }}

?>
</select>
    <input type="text" name="name" id="name">
    <input type="submit" value="Search">
  </form>
<table border=1px>
  <?php
  $id=0;
  if(gettype($_GET['name']) == "NULL")
  {
    $str="";
  }
  else
  {
    $str=$_GET['name'];
  }
  if(gettype($_GET['tech']) == "NULL")
  {
    $tech="";
  }
  else
  {
    $tech=$_GET['tech'];
  }
  if(gettype($_GET['lang']) == "NULL")
  {
    $lang="";
  }
  else
  {
    $lang=$_GET['lang'];
  }
  ?>
  <tr>
    
    <th>ID <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=id&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=id&order=desc">v</a> </th>
    <th>Name <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=fname&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=fname&order=desc">v</a> </th>
    <th>Email <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=email&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=email&order=desc">v</a> </th>
    <th>Designation <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=designation&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=designation&order=desc">v</a> </th>
    <th>Address <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=addr1&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=addr1&order=desc">v</a> </th>
    <th>Phone No. <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=phone&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=phone&order=desc">v</a> </th>
    <th>Zip Code <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=zip&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=zip&order=desc">v</a> </th>
    <th>Date of Birth <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=dob&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=dob&order=desc">v</a> </th>
    <th>Gender <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=gender&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=gender&order=desc">v</a> </th>
    <th>Material Status <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=material_status&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=material_status&order=desc">v</a> </th>
    <th>State <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=state&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=state&order=desc">v</a> </th>
    <th>City <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=city&order=ASC">^</a> <a href="show_data.php?total=10&id=<?php echo $id?>&name=<?php echo $str?>&tech=<?php echo $tech?>&lang=<?php echo $lang?>&orderby=city&order=desc">v</a> </th>
    <th colspan="2">Action </th>


  </tr>



<?php
if( gettype($_GET['id']) == "NULL" && gettype($_GET['total']) == "NULL")
{

  $sql='SELECT * FROM `basic` WHERE id>10000 limit 0,10 ';
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo '<tr>';
      echo '<td>'.$row['id'].'</td>';
      echo '<td>'.$row['fname'].''.$row['lname'].'</td>';
      echo '<td>'.$row['email'].'</td>';

      echo '<td>'.$row['designation'].'</td>';
      echo '<td>'.$row['addr1'].''.$row['addr2'].'</td>';
      echo '<td>'.$row['phone'].'</td>';
      echo '<td>'.$row['zip'].'</td>';
      echo '<td>'.$row['dob'].'</td>';
      echo '<td>'.$row['gender'].'</td>';
      echo '<td>'.$row['material_status'].'</td>';
      echo '<td>'.$row['state_id'].'</td>';
      echo '<td>'.$row['city'].'</td>';
      echo '<td><a href="http://localhost/job_app/update.php?id='.$row['id'].'"><button>EDIT</button></a></td>';
      echo '<td><a href="http://localhost/job_app/include/del.php?id='.$row['id'].'"><button>DELETE</button></a></td>';
    

      echo '</tr>';

  
     }
  }
}
else
{
  if(gettype($_GET['name']) == "NULL")
  {
    $str="";
  }
  else
  {
   $str=$_GET['name'];
  }
  if(gettype($_GET['orderby']) == "NULL")
  {
    $orderby="id";
  }
  else
  {
   $orderby=$_GET['orderby'];
  }

  //$sql_check='SELECT basic.* FROM `basic` INNER JOIN technology_detail on basic.id=technology_detail.u_id INNER join Language_detail on basic.id=Language_detail.u_id  WHERE basic.id>10000 and basic.fname LIKE "%'.$str.'%" and technology_detail.option_id like "%'.$_GET['tech'].'%"  and Language_detail.option_id like "%'.$_GET['lang'].'%" GROUP by basic.id limit '.$_GET['id'].','.$_GET['total'].'';
  $sql_check='SELECT * FROM `basic` INNER JOIN technology_detail on basic.id=technology_detail.u_id INNER join Language_detail on basic.id=Language_detail.u_id  GROUP by basic.id having basic.id>10000 and basic.fname LIKE "%'.$str.'%" and technology_detail.option_id like "%'.$_GET['tech'].'%"  and Language_detail.option_id like "%'.$_GET['lang'].'%" ORDER BY basic.'.$orderby.' '.$_GET['order'].' limit '.$_GET['id'].','.$_GET['total'].'';
  echo $sql_check;
  
  $len=0;
  $result = $conn->query($sql_check);
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo '<tr>';
      echo '<td>'.$row['u_id'].'</td>';
      echo '<td>'.$row['fname'].' '.$row['lname'].'</td>';
      echo '<td>'.$row['email'].'</td>';
  
      echo '<td>'.$row['designation'].'</td>';
      echo '<td>'.$row['addr1'].' '.$row['addr2'].'</td>';
      echo '<td>'.$row['phone'].'</td>';
      echo '<td>'.$row['zip'].'</td>';
      echo '<td>'.$row['dob'].'</td>';
      echo '<td>'.$row['gender'].'</td>';
      echo '<td>'.$row['material_status'].'</td>';
      echo '<td>'.$row['state_id'].'</td>';
      echo '<td>'.$row['city'].'</td>';
      echo '<td><a href="http://localhost/job_app/update.php?id='.$row['u_id'].'"><button>EDIT</button></a></td>';
      echo '<td><a href="http://localhost/job_app/include/del.php?id='.$row['u_id'].'"><button>DELETE</button></a></td>';
      echo '</tr>';
    }
    } 
}
?>

</table>
<?php
$sqlcnt='SELECT basic.id FROM `basic` INNER JOIN technology_detail on basic.id=technology_detail.u_id INNER join Language_detail on basic.id=Language_detail.u_id  WHERE basic.id>10000 and basic.fname LIKE "%%" and technology_detail.option_id like "%%" and Language_detail.option_id like "%%" GROUP by basic.id; ';
$resultCnt = $conn->query($sqlcnt);

while ($row = $resultCnt->fetch_assoc()) {
$len++;
}

for ($i=0; $i <ceil($len/10) ; $i++) { 

$id=$i*10;
$display=$i+1;
if(gettype($_GET['name']) == "NULL")
{
  $str="";
}
else
{
  $str=$_GET['name'];
}
if(gettype($_GET['tech']) == "NULL")
{
  $tech="";
}
else
{
  $tech=$_GET['tech'];
}
if(gettype($_GET['lang']) == "NULL")
{
  $lang="";
}
else
{
  $lang=$_GET['lang'];
}
if(gettype($_GET['orderby']) == "NULL")
{
  $orderby="id";
}
else
{
  $orderby=$_GET['orderby'];
}
if(gettype($_GET['order']) == "NULL")
{
  $order="asc";
}
else
{
  $order=$_GET['order'];
}
echo "<a href='show_data.php?total=10&id=".$id."&name=".$str."&tech=".$tech."&lang=".$lang."&orderby=".$orderby."&order=".$order."'>".$display."</a>";
}
?>

</body>
</html>